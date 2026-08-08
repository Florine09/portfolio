document.addEventListener('DOMContentLoaded', () => {

  // Mobile nav toggle
  const burger = document.getElementById('burger');
  const nav = document.getElementById('main-nav');

  if (burger && nav) {
    burger.addEventListener('click', () => {
      const isOpen = nav.classList.toggle('open');
      burger.setAttribute('aria-expanded', String(isOpen));
    });

    nav.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        nav.classList.remove('open');
        burger.setAttribute('aria-expanded', 'false');
      });
    });
  }

  // Scroll-spy: highlight active nav link
  const sections = document.querySelectorAll('main section[id]');
  const navLinks = document.querySelectorAll('.main-nav a');

  const setActiveLink = () => {
    let current = '';
    sections.forEach(section => {
      const rect = section.getBoundingClientRect();
      if (rect.top <= 120 && rect.bottom >= 120) {
        current = section.id;
      }
    });
    navLinks.forEach(link => {
      link.classList.toggle('active', link.getAttribute('href') === `#${current}`);
    });
  };
  window.addEventListener('scroll', setActiveLink);
  setActiveLink();

  // Reveal-on-scroll animations
  const revealTargets = document.querySelectorAll(
    '.activity-row, .ticket, .testimonial-card, .why-item, .ambiance-tile'
  );
  revealTargets.forEach(el => el.setAttribute('data-reveal', ''));

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });

  revealTargets.forEach(el => observer.observe(el));

  // Contact form (front-end only demo submission)
  const form = document.getElementById('contact-form');
  const note = document.getElementById('form-note');

  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      note.hidden = false;
      form.reset();
    });
  }

});
