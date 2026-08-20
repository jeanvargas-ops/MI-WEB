document.addEventListener('DOMContentLoaded', () => {
  let cart = [];
  let currentCurrency = 'USD';

  const rates = {
    USD: { rate: 1, symbol: '$', code: 'USD' },
    BOB: { rate: 6.96, symbol: 'Bs ', code: 'BOB' },
    EUR: { rate: 0.92, symbol: '€', code: 'EUR' }
  };

  const cartBadge = document.getElementById('cartBadge');
  const cartItemsContainer = document.getElementById('cartItemsContainer');
  const emptyCartMsg = document.getElementById('emptyCartMsg');
  const cartTotal = document.getElementById('cartTotal');
  const checkoutBtn = document.getElementById('checkoutBtn');
  const currencySelector = document.getElementById('currencySelector');

  // Autoplay Slider (Cambio Automático cada 3.5s)
  const heroCarouselEl = document.getElementById('heroCarousel');
  if (heroCarouselEl) {
    const heroCarousel = new bootstrap.Carousel(heroCarouselEl, {
      interval: 3500,
      ride: 'carousel',
      pause: 'hover',
      wrap: true
    });
  }

  document.querySelectorAll('.quantity-picker').forEach(picker => {
    const btnMinus = picker.querySelector('.btn-minus');
    const btnPlus = picker.querySelector('.btn-plus');
    const valSpan = picker.querySelector('.quantity-val');

    btnMinus.addEventListener('click', () => {
      let current = parseInt(valSpan.textContent);
      if (current > 1) {
        valSpan.textContent = current - 1;
      }
    });

    btnPlus.addEventListener('click', () => {
      let current = parseInt(valSpan.textContent);
      valSpan.textContent = current + 1;
    });
  });

  document.querySelectorAll('.add-to-cart, .add-course-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const name = btn.getAttribute('data-name');
      const basePriceUSD = parseFloat(btn.getAttribute('data-price'));
      const pickerId = btn.getAttribute('data-picker');

      let qty = 1;
      if (pickerId) {
        const picker = document.querySelector(`.quantity-picker[data-id="${pickerId}"]`);
        if (picker) {
          qty = parseInt(picker.querySelector('.quantity-val').textContent);
        }
      }

      addToCart(name, basePriceUSD, qty);

      btn.classList.add('added');
      const spanText = btn.querySelector('span');
      const icon = btn.querySelector('i');

      const origText = spanText ? spanText.textContent : '';
      if (spanText) spanText.textContent = '¡Agregado!';
      if (icon) icon.className = 'fa-solid fa-check me-1';

      setTimeout(() => {
        btn.classList.remove('added');
        if (spanText) spanText.textContent = origText;
        if (icon) icon.className = 'fa-solid fa-cart-plus icon-cart';
      }, 1400);
    });
  });

  function addToCart(name, priceUSD, qty) {
    const existingItem = cart.find(item => item.name === name);
    if (existingItem) {
      existingItem.quantity += qty;
    } else {
      cart.push({ name, priceUSD, quantity: qty });
    }
    updateCartUI();
  }

  if (currencySelector) {
    currencySelector.addEventListener('change', (e) => {
      currentCurrency = e.target.value;
      updatePagePrices();
      updateCartUI();
    });
  }

  function formatPrice(amountUSD) {
    const currency = rates[currentCurrency];
    const converted = amountUSD * currency.rate;
    return `${currency.symbol}${converted.toFixed(2)} ${currency.code}`;
  }

  function updatePagePrices() {
    document.querySelectorAll('.price-tag').forEach(tag => {
      const baseUSD = parseFloat(tag.getAttribute('data-usd'));
      tag.textContent = formatPrice(baseUSD);
    });
  }

  function updateCartUI() {
    const totalCount = cart.reduce((acc, item) => acc + item.quantity, 0);
    cartBadge.textContent = totalCount;

    cartItemsContainer.innerHTML = '';

    if (cart.length === 0) {
      cartItemsContainer.appendChild(emptyCartMsg);
      checkoutBtn.disabled = true;
      cartTotal.textContent = formatPrice(0);
      return;
    }

    checkoutBtn.disabled = false;
    let grandTotalUSD = 0;

    cart.forEach((item, index) => {
      const itemTotalUSD = item.priceUSD * item.quantity;
      grandTotalUSD += itemTotalUSD;

      const itemEl = document.createElement('div');
      itemEl.className = 'list-group-item bg-dark text-white border-secondary d-flex justify-content-between align-items-center py-3';
      itemEl.innerHTML = `
        <div>
          <h6 class="mb-0 fw-bold small">${item.name}</h6>
          <small class="text-secondary">${formatPrice(item.priceUSD)} x ${item.quantity}</small>
        </div>
        <div class="d-flex align-items-center gap-2">
          <span class="fw-bold text-danger small">${formatPrice(itemTotalUSD)}</span>
          <button class="btn btn-sm btn-outline-secondary py-0 px-2 remove-btn" data-index="${index}">&times;</button>
        </div>
      `;
      cartItemsContainer.appendChild(itemEl);
    });

    cartTotal.textContent = formatPrice(grandTotalUSD);

    document.querySelectorAll('.remove-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const index = parseInt(btn.getAttribute('data-index'));
        cart.splice(index, 1);
        updateCartUI();
      });
    });
  }

  checkoutBtn.addEventListener('click', () => {
    alert(`¡Gracias por tu compra! Redirigiendo a la pasarela de pago seguro en ${currentCurrency}...`);
    cart = [];
    updateCartUI();
  });

  const contactForm = document.getElementById('contactForm');
  const contactAlert = document.getElementById('contactAlert');

