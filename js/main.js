/* ============================================================
   BhOOKey.com – Main JavaScript
   ============================================================ */

(function () {
  'use strict';

  /* ---- Scroll Reveal ---- */
  function initScrollReveal() {
    const els = document.querySelectorAll('.reveal');
    if (!els.length) return;

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('revealed');
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
    );

    els.forEach((el) => observer.observe(el));
  }

  /* ---- Navbar Scroll Effect ---- */
  function initNavbarScroll() {
    const navbar = document.querySelector('.site-navbar');
    if (!navbar) return;

    window.addEventListener('scroll', function () {
      if (window.scrollY > 60) {
        navbar.style.boxShadow = '0 4px 30px rgba(0,0,0,.12)';
        navbar.style.padding = '8px 0';
      } else {
        navbar.style.boxShadow = '0 2px 20px rgba(0,0,0,.08)';
        navbar.style.padding = '15px 0';
      }
    }, { passive: true });
  }

  /* ---- Mouse-tracking About Image ---- */
  function initMouseTrack() {
    const wrapper = document.querySelector('.mouse-track');
    if (!wrapper) return;

    document.addEventListener('mousemove', function (e) {
      const rect = wrapper.getBoundingClientRect();
      const cx = rect.left + rect.width / 2;
      const cy = rect.top + rect.height / 2;

      const dx = (e.clientX - cx) / window.innerWidth;
      const dy = (e.clientY - cy) / window.innerHeight;

      const tx = -dx * 20;
      const ty = -dy * 20;

      wrapper.style.transform = `translate(${tx}px, ${ty}px)`;
    }, { passive: true });
  }

  /* ---- Active Nav Link ---- */
  function initActiveNav() {
    const path = window.location.pathname.split('/').pop() || 'index.html';
    document.querySelectorAll('.nav-link').forEach((link) => {
      const href = link.getAttribute('href');
      if (href === path || (path === '' && href === 'index.html')) {
        link.classList.add('active');
      }
    });
  }

  /* ---- Parallax CTA ---- */
  function initParallax() {
    const cta = document.querySelector('.cta-section');
    if (!cta) return;

    window.addEventListener('scroll', function () {
      const scrolled = window.scrollY;
      const rect = cta.getBoundingClientRect();
      const inView = rect.top < window.innerHeight && rect.bottom > 0;
      if (inView) {
        const offset = (scrolled - (cta.offsetTop - window.innerHeight)) * 0.3;
        cta.style.backgroundPositionY = offset + 'px';
      }
    }, { passive: true });
  }

  /* ---- Counter Animation ---- */
  function initCounters() {
    const counters = document.querySelectorAll('[data-count]');
    if (!counters.length) return;

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const el = entry.target;
          const target = parseInt(el.getAttribute('data-count'));
          let current = 0;
          const step = Math.ceil(target / 60);
          const timer = setInterval(() => {
            current += step;
            if (current >= target) { current = target; clearInterval(timer); }
            el.textContent = current.toLocaleString();
          }, 20);
          observer.unobserve(el);
        }
      });
    }, { threshold: 0.5 });

    counters.forEach((c) => observer.observe(c));
  }

  /* ---- Float animation stagger ---- */
  function initFloatStagger() {
    document.querySelectorAll('.float-card').forEach((card, i) => {
      card.style.animationDelay = (i * 0.4) + 's';
    });
  }

  /* ---- Init ---- */
  document.addEventListener('DOMContentLoaded', function () {
    initScrollReveal();
    initNavbarScroll();
    initMouseTrack();
    initActiveNav();
    initParallax();
    initCounters();
    initFloatStagger();
  });

})();
