(function () {
  'use strict';

  // Mobile nav toggle
  var toggle = document.querySelector('.nav-toggle');
  var nav = document.querySelector('.main-nav');
  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      var open = nav.classList.toggle('is-open');
      toggle.setAttribute('aria-expanded', String(open));
      document.body.style.overflow = open ? 'hidden' : '';
    });

    nav.querySelectorAll('.has-children > a').forEach(function (link) {
      link.addEventListener('click', function (event) {
        if (window.innerWidth >= 1200) return;
        var parent = link.parentElement;
        if (!parent.classList.contains('is-open')) {
          event.preventDefault();
          nav.querySelectorAll('.has-children.is-open').forEach(function (li) {
            if (li !== parent) li.classList.remove('is-open');
          });
          parent.classList.add('is-open');
        }
      });
    });
  }

  // Close mobile nav on link click / resize back to desktop
  document.querySelectorAll('.main-nav a').forEach(function (link) {
    link.addEventListener('click', function () {
      if (window.innerWidth < 1200 && !link.parentElement.classList.contains('has-children')) {
        nav.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      }
    });
  });

  // Scroll reveal
  var revealEls = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && revealEls.length) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
    revealEls.forEach(function (el) { observer.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add('is-visible'); });
  }

  // Animated stat counters
  var counters = document.querySelectorAll('[data-count-to]');
  if (counters.length) {
    var animateCounter = function (el) {
      var to = parseInt(el.getAttribute('data-count-to'), 10) || 0;
      var suffix = el.getAttribute('data-suffix') || '';
      var duration = 1400;
      var start = null;

      function step(timestamp) {
        if (!start) start = timestamp;
        var progress = Math.min((timestamp - start) / duration, 1);
        var eased = 1 - Math.pow(1 - progress, 3);
        el.textContent = Math.round(eased * to).toLocaleString() + suffix;
        if (progress < 1) window.requestAnimationFrame(step);
      }
      window.requestAnimationFrame(step);
    };

    if ('IntersectionObserver' in window) {
      var counterObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            animateCounter(entry.target);
            counterObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.6 });
      counters.forEach(function (el) { counterObserver.observe(el); });
    } else {
      counters.forEach(animateCounter);
    }
  }

  // Subtle mouse-parallax on the hero photo. Targets the media wrapper
  // (not the <img>, which already runs its own CSS zoom animation) so the
  // two transforms don't fight over the same element.
  var hero = document.getElementById('hero');
  var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (hero && !reduceMotion && window.matchMedia('(pointer: fine)').matches) {
    var heroMedia = hero.querySelector('.hero__media');
    var ticking = false;
    var targetX = 0, targetY = 0, currentX = 0, currentY = 0;

    hero.addEventListener('mousemove', function (event) {
      var rect = hero.getBoundingClientRect();
      var relX = (event.clientX - rect.left) / rect.width - 0.5;
      var relY = (event.clientY - rect.top) / rect.height - 0.5;
      targetX = relX * -16;
      targetY = relY * -16;
      if (!ticking) {
        window.requestAnimationFrame(render);
        ticking = true;
      }
    });

    function render() {
      currentX += (targetX - currentX) * 0.08;
      currentY += (targetY - currentY) * 0.08;
      heroMedia.style.transform = 'translate3d(' + currentX.toFixed(1) + 'px, ' + currentY.toFixed(1) + 'px, 0)';
      if (Math.abs(targetX - currentX) > 0.1 || Math.abs(targetY - currentY) > 0.1) {
        window.requestAnimationFrame(render);
      } else {
        ticking = false;
      }
    }
  }
})();
