(function () {
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach((item) => {
    const trigger = item.querySelector('.faq-trigger');
    if (!trigger) return;
    trigger.addEventListener('click', () => {
      item.classList.toggle('open');
    });
  });

  const countdown = document.querySelector('.countdown');
  if (!countdown) return;

  const targetRaw = countdown.getAttribute('data-countdown-target');
  if (!targetRaw) return;

  const target = new Date(targetRaw).getTime();
  const dayEl = countdown.querySelector('[data-days]');
  const hourEl = countdown.querySelector('[data-hours]');
  const minEl = countdown.querySelector('[data-mins]');
  const secEl = countdown.querySelector('[data-secs]');

  function renderCountdown() {
    const now = Date.now();
    const diff = Math.max(0, target - now);

    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
    const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
    const mins = Math.floor((diff / (1000 * 60)) % 60);
    const secs = Math.floor((diff / 1000) % 60);

    dayEl.textContent = String(days);
    hourEl.textContent = String(hours).padStart(2, '0');
    minEl.textContent = String(mins).padStart(2, '0');
    secEl.textContent = String(secs).padStart(2, '0');
  }

  renderCountdown();
  setInterval(renderCountdown, 1000);
})();
