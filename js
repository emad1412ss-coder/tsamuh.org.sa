// Mobile menu toggle + active link highlight
(function () {
  const burger = document.querySelector('[data-burger]');
  const mobileNav = document.querySelector('[data-mobile-nav]');

  if (burger && mobileNav) {
    burger.addEventListener('click', () => {
      const isHidden = mobileNav.hasAttribute('hidden');
      if (isHidden) mobileNav.removeAttribute('hidden');
      else mobileNav.setAttribute('hidden', '');
    });
  }

  // Add "active" class to current nav link
  const current = location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('a[data-nav]').forEach(a => {
    const href = a.getAttribute('href');
    if (href === current) a.classList.add('active');
  });
})();
