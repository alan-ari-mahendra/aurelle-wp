(function () {
  'use strict';

  // Mobile nav
  var openBtn = document.getElementById('au-nav-open');
  var closeBtn = document.getElementById('au-nav-close');
  var overlay = document.getElementById('au-nav-overlay');

  if (openBtn && overlay && closeBtn) {
    openBtn.addEventListener('click', function () {
      overlay.classList.add('is-open');
      document.body.style.overflow = 'hidden';
    });
    closeBtn.addEventListener('click', closeNav);
    overlay.addEventListener('click', function (e) {
      if (e.target === overlay) closeNav();
    });
    overlay.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', closeNav);
    });
  }

  function closeNav() {
    if (overlay) overlay.classList.remove('is-open');
    document.body.style.overflow = '';
  }

  // Close nav on escape key
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeNav();
  });

  // Header scroll: add backdrop after hero
  var header = document.querySelector('.au-header');
  if (header) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 60) {
        header.style.position = 'fixed';
        header.style.background = 'rgba(248,245,240,0.95)';
        header.style.backdropFilter = 'blur(10px)';
        header.style.boxShadow = '0 1px 0 #E6E0D8';
      } else {
        header.style.position = 'absolute';
        header.style.background = '';
        header.style.backdropFilter = '';
        header.style.boxShadow = '';
      }
    }, { passive: true });
  }

  // Appointment form: basic client-side confirmation
  var form = document.getElementById('au-booking-form');
  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var success = document.getElementById('au-form-success');
      if (success) success.style.display = 'block';
      form.querySelectorAll('input, select').forEach(function (el) {
        el.value = '';
      });
      form.querySelector('button[type="submit"]').textContent = 'Sent!';
      form.querySelector('button[type="submit"]').disabled = true;
    });
  }

  // Compare sliders — autoplay bouncing + hover follows cursor
  document.querySelectorAll('.au-compare').forEach(function (el) {
    var rafId = null;
    var startTime = null;
    var CYCLE = 4000; // ms per half-cycle (0→100 or 100→0)

    function setPercent(pct) {
      el.style.setProperty('--pct', pct + '%');
    }

    function tick(ts) {
      if (!startTime) startTime = ts;
      var elapsed = ts - startTime;
      var progress = (elapsed % (CYCLE * 2)) / CYCLE;
      var pct = progress <= 1 ? progress * 100 : (2 - progress) * 100;
      setPercent(pct);
      rafId = requestAnimationFrame(tick);
    }

    function startAutoplay() {
      startTime = null;
      rafId = requestAnimationFrame(tick);
    }

    function stopAutoplay() {
      if (rafId) { cancelAnimationFrame(rafId); rafId = null; }
    }

    function hoverPercent(clientX) {
      var rect = el.getBoundingClientRect();
      return Math.max(0, Math.min(100, (clientX - rect.left) / rect.width * 100));
    }

    el.addEventListener('mouseenter', stopAutoplay);

    el.addEventListener('mousemove', function (e) {
      setPercent(hoverPercent(e.clientX));
    });

    el.addEventListener('mouseleave', startAutoplay);

    startAutoplay();
  });

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(function (a) {
    a.addEventListener('click', function (e) {
      var id = this.getAttribute('href').slice(1);
      if (!id) return;
      var target = document.getElementById(id);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

})();
