/**
 * Clear Water Prowash - Main JavaScript
 * Pure Vanilla JS: Mobile Navigation, Before/After Slider, Accordion, Quote AJAX
 */

(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    initMobileNav();
    initBeforeAfterSlider();
    initServicesFilter();
    initGalleryFilter();
    initTransformationLightbox();
    initReviewsCarousel();
    initFaqAccordion();
    initQuoteForm();
    initServicePreselection();
    initBackToTop();
  });

  /* ==========================================================================
     1. MOBILE NAVIGATION
     ========================================================================== */
  function initMobileNav() {
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    const navDrawer = document.getElementById('mobile-navigation');
    if (!toggleBtn || !navDrawer) return;

    function openMenu() {
      toggleBtn.setAttribute('aria-expanded', 'true');
      navDrawer.setAttribute('aria-hidden', 'false');
      navDrawer.classList.add('is-open');
      document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
      toggleBtn.setAttribute('aria-expanded', 'false');
      navDrawer.setAttribute('aria-hidden', 'true');
      navDrawer.classList.remove('is-open');
      document.body.style.overflow = '';
    }

    toggleBtn.addEventListener('click', function () {
      const isOpen = toggleBtn.getAttribute('aria-expanded') === 'true';
      if (isOpen) {
        closeMenu();
      } else {
        openMenu();
      }
    });

    // Close when clicking any nav link
    const links = navDrawer.querySelectorAll('a');
    links.forEach(function (link) {
      link.addEventListener('click', function () {
        closeMenu();
      });
    });

    // Close on close button click
    const closeDrawerBtn = document.getElementById('mobile-drawer-close-btn');
    if (closeDrawerBtn) {
      closeDrawerBtn.addEventListener('click', function () {
        closeMenu();
      });
    }

    // Close on click outside drawer inner
    navDrawer.addEventListener('click', function (e) {
      if (e.target === navDrawer) {
        closeMenu();
      }
    });

    // Close on Escape key
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && toggleBtn.getAttribute('aria-expanded') === 'true') {
        closeMenu();
        toggleBtn.focus();
      }
    });

    // Desktop Navigation Dropdowns (Services and Service Areas) touch & keyboard accessibility
    const navDropdownItems = document.querySelectorAll('.nav-item-dropdown');
    navDropdownItems.forEach(function (dropdownItem) {
      const toggleBtn = dropdownItem.querySelector('.dropdown-toggle');
      if (!toggleBtn) return;

      toggleBtn.addEventListener('click', function (e) {
        if (window.innerWidth >= 1024) {
          const isOpen = dropdownItem.classList.contains('is-open');
          
          // Close other open dropdowns
          navDropdownItems.forEach(function (otherItem) {
            if (otherItem !== dropdownItem) {
              otherItem.classList.remove('is-open');
              const otherBtn = otherItem.querySelector('.dropdown-toggle');
              if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
            }
          });

          if (!isOpen && toggleBtn.tagName.toLowerCase() === 'button') {
            e.preventDefault();
            dropdownItem.classList.add('is-open');
            toggleBtn.setAttribute('aria-expanded', 'true');
          } else if (isOpen && toggleBtn.tagName.toLowerCase() === 'button') {
            dropdownItem.classList.remove('is-open');
            toggleBtn.setAttribute('aria-expanded', 'false');
          }
        }
      });

      const dropdownLinks = dropdownItem.querySelectorAll('a');
      dropdownLinks.forEach(function (link) {
        link.addEventListener('click', function () {
          dropdownItem.classList.remove('is-open');
          toggleBtn.setAttribute('aria-expanded', 'false');
        });
      });
    });

    document.addEventListener('click', function (e) {
      navDropdownItems.forEach(function (dropdownItem) {
        if (!dropdownItem.contains(e.target)) {
          dropdownItem.classList.remove('is-open');
          const toggleBtn = dropdownItem.querySelector('.dropdown-toggle');
          if (toggleBtn) toggleBtn.setAttribute('aria-expanded', 'false');
        }
      });
    });
  }

  /* ==========================================================================
     2. INTERACTIVE BEFORE & AFTER SLIDER (Pure CSS/JS)
     ========================================================================== */
  function initBeforeAfterSlider() {
    const container = document.getElementById('interactive-ba-slider');
    const handle = document.getElementById('slider-handle');
    if (!container || !handle) return;

    let isDragging = false;

    function setSliderPosition(percentage) {
      // Clamp between 2% and 98%
      const clamped = Math.max(2, Math.min(98, percentage));
      container.style.setProperty('--slider-pos', clamped + '%');
      handle.setAttribute('aria-valuenow', Math.round(clamped));
    }

    function getPercentageFromEvent(e) {
      const rect = container.getBoundingClientRect();
      const clientX = e.touches && e.touches.length ? e.touches[0].clientX : e.clientX;
      const xPos = clientX - rect.left;
      return (xPos / rect.width) * 100;
    }

    function onPointerMove(e) {
      if (!isDragging) return;
      setSliderPosition(getPercentageFromEvent(e));
    }

    function onPointerUp() {
      if (isDragging) {
        isDragging = false;
        window.removeEventListener('mousemove', onPointerMove);
        window.removeEventListener('mouseup', onPointerUp);
        window.removeEventListener('touchmove', onPointerMove);
        window.removeEventListener('touchend', onPointerUp);
      }
    }

    function onPointerDown(e) {
      isDragging = true;
      setSliderPosition(getPercentageFromEvent(e));
      window.addEventListener('mousemove', onPointerMove);
      window.addEventListener('mouseup', onPointerUp);
      window.addEventListener('touchmove', onPointerMove, { passive: true });
      window.addEventListener('touchend', onPointerUp);
    }

    container.addEventListener('mousedown', onPointerDown);
    container.addEventListener('touchstart', onPointerDown, { passive: true });

    // Keyboard navigation on handle
    handle.addEventListener('keydown', function (e) {
      let currentVal = parseInt(handle.getAttribute('aria-valuenow') || '50', 10);
      if (e.key === 'ArrowLeft' || e.key === 'ArrowDown') {
        e.preventDefault();
        setSliderPosition(currentVal - 5);
      } else if (e.key === 'ArrowRight' || e.key === 'ArrowUp') {
        e.preventDefault();
        setSliderPosition(currentVal + 5);
      }
    });

    // Default start at 50%
    setSliderPosition(50);
  }

  /* ==========================================================================
     3. ACCESSIBLE FAQ ACCORDION
     ========================================================================== */
  function initFaqAccordion() {
    const faqItems = document.querySelectorAll('.faq-item');
    if (!faqItems.length) return;

    faqItems.forEach(function (item) {
      const questionBtn = item.querySelector('.faq-question');
      const answer = item.querySelector('.faq-answer');
      if (!questionBtn || !answer) return;

      questionBtn.addEventListener('click', function () {
        const isExpanded = questionBtn.getAttribute('aria-expanded') === 'true';

        // Optional: close other open items for cleaner single-item view
        faqItems.forEach(function (otherItem) {
          if (otherItem !== item) {
            const otherBtn = otherItem.querySelector('.faq-question');
            const otherAns = otherItem.querySelector('.faq-answer');
            if (otherBtn && otherAns) {
              otherBtn.setAttribute('aria-expanded', 'false');
              otherItem.classList.remove('is-expanded');
              otherAns.style.maxHeight = null;
            }
          }
        });

        if (isExpanded) {
          questionBtn.setAttribute('aria-expanded', 'false');
          item.classList.remove('is-expanded');
          answer.style.maxHeight = null;
        } else {
          questionBtn.setAttribute('aria-expanded', 'true');
          item.classList.add('is-expanded');
          answer.style.maxHeight = answer.scrollHeight + 'px';
        }
      });
    });

    // FAQ Category Filter Pills
    const filterPills = document.querySelectorAll('.faq-filter-pill');
    const categoryHeaders = document.querySelectorAll('.faq-category-header');

    if (filterPills.length) {
      filterPills.forEach(function (pill) {
        pill.addEventListener('click', function () {
          const filter = pill.getAttribute('data-faq-filter');

          // Update active pill state
          filterPills.forEach(function (p) {
            p.classList.remove('is-active');
            p.setAttribute('aria-selected', 'false');
          });
          pill.classList.add('is-active');
          pill.setAttribute('aria-selected', 'true');

          // Filter category headers
          categoryHeaders.forEach(function (header) {
            const cat = header.getAttribute('data-faq-cat');
            if (filter === 'all' || cat === filter) {
              header.classList.remove('is-filtered-out');
            } else {
              header.classList.add('is-filtered-out');
            }
          });

          // Filter FAQ items
          faqItems.forEach(function (item) {
            const itemCat = item.getAttribute('data-faq-cat');
            if (filter === 'all' || itemCat === filter) {
              item.classList.remove('is-filtered-out');
            } else {
              item.classList.add('is-filtered-out');
              // Close if open
              const btn = item.querySelector('.faq-question');
              const ans = item.querySelector('.faq-answer');
              if (btn && ans) {
                btn.setAttribute('aria-expanded', 'false');
                item.classList.remove('is-expanded');
                ans.style.maxHeight = null;
              }
            }
          });
        });
      });
    }
  }

  /* ==========================================================================
     4. AUTHENTIC GOOGLE REVIEWS CAROUSEL
     ========================================================================== */
  function initReviewsCarousel() {
    const track = document.getElementById('reviews-track');
    const prevBtn = document.getElementById('reviews-carousel-prev');
    const nextBtn = document.getElementById('reviews-carousel-next');
    const viewport = document.getElementById('reviews-viewport');
    const dotsContainer = document.getElementById('reviews-dots');
    if (!track || !viewport) return;

    const cards = track.querySelectorAll('.google-review-card');
    if (!cards.length) return;

    let currentIndex = 0;
    let cardsPerView = window.innerWidth >= 768 ? 2 : 1;
    let maxIndex = Math.max(0, cards.length - cardsPerView);

    function updateCarousel() {
      cardsPerView = window.innerWidth >= 768 ? 2 : 1;
      maxIndex = Math.max(0, cards.length - cardsPerView);
      if (currentIndex > maxIndex) currentIndex = maxIndex;

      // Calculate slide translation with subpixel precision
      const card = cards[0];
      const cardWidth = card ? card.getBoundingClientRect().width : viewport.clientWidth;
      const gap = 24; // 1.5rem gap between cards
      const offset = currentIndex * (cardWidth + gap);
      track.style.transform = 'translateX(-' + Math.round(offset) + 'px)';

      // Update dots
      if (dotsContainer) {
        const dots = dotsContainer.querySelectorAll('.reviews-dot');
        dots.forEach(function (dot, idx) {
          if (idx === currentIndex) {
            dot.classList.add('is-active');
            dot.setAttribute('aria-selected', 'true');
          } else {
            dot.classList.remove('is-active');
            dot.setAttribute('aria-selected', 'false');
          }
        });
      }
    }

    function buildDots() {
      if (!dotsContainer) return;
      dotsContainer.innerHTML = '';
      const numDots = maxIndex + 1;
      for (let i = 0; i < numDots; i++) {
        const dot = document.createElement('button');
        dot.type = 'button';
        dot.className = 'reviews-dot' + (i === currentIndex ? ' is-active' : '');
        dot.setAttribute('role', 'tab');
        dot.setAttribute('aria-label', 'Go to review slide ' + (i + 1));
        dot.addEventListener('click', function () {
          currentIndex = i;
          updateCarousel();
        });
        dotsContainer.appendChild(dot);
      }
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', function () {
        currentIndex = (currentIndex <= 0) ? maxIndex : currentIndex - 1;
        updateCarousel();
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', function () {
        currentIndex = (currentIndex >= maxIndex) ? 0 : currentIndex + 1;
        updateCarousel();
      });
    }

    // Touch swipe support for mobile
    let touchStartX = 0;
    viewport.addEventListener('touchstart', function (e) {
      if (e.touches && e.touches.length) {
        touchStartX = e.touches[0].clientX;
      }
    }, { passive: true });

    viewport.addEventListener('touchend', function (e) {
      if (e.changedTouches && e.changedTouches.length) {
        const diffX = e.changedTouches[0].clientX - touchStartX;
        if (Math.abs(diffX) > 40) {
          if (diffX < 0) {
            // swipe left -> next
            currentIndex = (currentIndex >= maxIndex) ? 0 : currentIndex + 1;
          } else {
            // swipe right -> prev
            currentIndex = (currentIndex <= 0) ? maxIndex : currentIndex - 1;
          }
          updateCarousel();
        }
      }
    }, { passive: true });

    // Window resize handler with debounce
    let resizeTimer = null;
    window.addEventListener('resize', function () {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function () {
        cardsPerView = window.innerWidth >= 768 ? 2 : 1;
        maxIndex = Math.max(0, cards.length - cardsPerView);
        buildDots();
        updateCarousel();
      }, 100);
    });

    window.addEventListener('load', function () {
      updateCarousel();
    });

    buildDots();
    updateCarousel();
  }

  /* ==========================================================================
     5. FRICTION-FREE INSTANT QUOTE FORM AJAX (14 SERVICES SELECTION)
     ========================================================================== */
  function initQuoteForm() {
    const form = document.getElementById('instant-quote-form');
    const submitBtn = document.getElementById('quote-submit-btn');
    const feedbackBox = document.getElementById('quote-feedback');
    if (!form || !submitBtn) return;

    // Interactive custom checkbox visual state sync
    const checkInputs = form.querySelectorAll('.service-checkbox-input');
    const otherCheckbox = document.getElementById('svc-other');
    const otherWrap = document.getElementById('service-other-wrap');

    checkInputs.forEach(function (cb) {
      cb.addEventListener('change', function () {
        const item = cb.closest('.service-check-item');
        if (item) {
          if (cb.checked) {
            item.classList.add('is-checked');
          } else {
            item.classList.remove('is-checked');
          }
        }
        if (cb === otherCheckbox && otherWrap) {
          otherWrap.style.display = cb.checked ? 'block' : 'none';
          if (cb.checked) {
            const noteInput = document.getElementById('service-other-note');
            if (noteInput) noteInput.focus();
          }
        }
      });
    });

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      const nameInput = form.querySelector('[name="fullname"]');
      const phoneInput = form.querySelector('[name="phone"]');
      const checkedServices = form.querySelectorAll('input[name="services[]"]:checked');

      // 1. Check if they filled out the required fields
      if (!nameInput.value.trim() || !phoneInput.value.trim()) {
        showFeedback('Please provide your name and phone number so we can text or call you your estimate.', false);
        return;
      }

      if (!checkedServices.length) {
        showFeedback('Please select at least one exterior cleaning service you would like an estimate for.', false);
        return;
      }

      // 2. Enter loading state (makes the button look like it's working)
      submitBtn.classList.add('is-loading');
      submitBtn.disabled = true;
      if (feedbackBox) feedbackBox.style.display = 'none';

      // 3. Fake a 1.5-second delay, then show the demo pop-up!
      setTimeout(() => {
          alert("DEMO MODE: On the live website, this will instantly email and text the Clear Water Prowash team with the customer's quote details!");
          
          // 4. Reset the button and form back to normal
          submitBtn.classList.remove('is-loading');
          submitBtn.disabled = false;
          showFeedback('Demo: Quote request simulated successfully!', true);
          
          form.reset();
          form.querySelectorAll('.service-check-item').forEach(function (item) {
            item.classList.remove('is-checked');
          });
          const otherWrap = document.getElementById('service-other-wrap');
          if (otherWrap) otherWrap.style.display = 'none';
      }, 1500);
    });

    function showFeedback(message, isSuccess) {
      if (!feedbackBox) return;
      feedbackBox.textContent = message;
      feedbackBox.className = 'quote-feedback-box ' + (isSuccess ? 'is-success' : 'is-error');
      feedbackBox.style.display = 'block';
      feedbackBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
  }

  /* ==========================================================================
     6. SERVICE PRE-SELECTION HELPER
     ========================================================================== */
  function selectServiceByName(serviceName) {
    if (!serviceName) return;
    const clean = serviceName.toLowerCase();
    const checkboxes = document.querySelectorAll('input[name="services[]"]');
    let matched = null;

    checkboxes.forEach(function (cb) {
      const val = cb.value.toLowerCase();
      if (val === clean) {
        matched = cb;
      } else if (!matched && (
        (clean.includes('house') && val.includes('house')) ||
        (clean.includes('roof') && val.includes('roof')) ||
        (clean.includes('paver') && (val.includes('paver') || val.includes('sanding'))) ||
        (clean.includes('driveway') && val.includes('driveway')) ||
        (clean.includes('porch') && val.includes('porch')) ||
        (clean.includes('concrete') && (val.includes('concrete') || val.includes('patio pad'))) ||
        (clean.includes('gutter') && val.includes('gutter')) ||
        (clean.includes('deck') && val.includes('deck')) ||
        (clean.includes('fence') && val.includes('fence')) ||
        (clean.includes('screen') && val.includes('screen'))
      )) {
        matched = cb;
      }
    });

    if (matched) {
      matched.checked = true;
      const parentItem = matched.closest('.service-check-item');
      if (parentItem) {
        parentItem.classList.add('is-checked', 'highlight-pulse');
        setTimeout(function () {
          parentItem.classList.remove('highlight-pulse');
        }, 1600);
      }
    }
  }

  function initServicePreselection() {
    const selectButtons = document.querySelectorAll('[data-service-name], [data-service-select]');
    const quoteSection = document.getElementById('quote-section');

    if (!selectButtons.length) return;

    selectButtons.forEach(function (btn) {
      btn.addEventListener('click', function (e) {
        const serviceName = btn.getAttribute('data-service-name') || btn.getAttribute('data-service-select');
        if (!serviceName) return;

        selectServiceByName(serviceName);

        if (quoteSection) {
          quoteSection.scrollIntoView({ behavior: 'smooth' });
        }
      });
    });
  }

  /* ==========================================================================
     6. BACK TO TOP BUTTON
     ========================================================================== */
  function initBackToTop() {
    const backBtn = document.getElementById('back-to-top');
    if (!backBtn) return;

    window.addEventListener('scroll', function () {
      if (window.scrollY > 400) {
        backBtn.classList.add('is-visible');
      } else {
        backBtn.classList.remove('is-visible');
      }
    }, { passive: true });

    backBtn.addEventListener('click', function () {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  /* ==========================================================================
     7. TRANSFORMATION GALLERY FILTER TABS
     ========================================================================== */
  function initGalleryFilter() {
    const filterPills = document.querySelectorAll('.gallery-filter-pill');
    const cards = document.querySelectorAll('.real-job-card');
    if (!filterPills.length || !cards.length) return;

    filterPills.forEach(function (pill) {
      pill.addEventListener('click', function () {
        const filterVal = pill.getAttribute('data-filter');

        // Update active tab state
        filterPills.forEach(function (p) {
          p.classList.remove('is-active');
          p.setAttribute('aria-selected', 'false');
        });
        pill.classList.add('is-active');
        pill.setAttribute('aria-selected', 'true');

        // Filter cards
        cards.forEach(function (card) {
          const category = card.getAttribute('data-category');
          if (filterVal === 'all' || category === filterVal) {
            card.classList.remove('is-hidden');
          } else {
            card.classList.add('is-hidden');
          }
        });
      });
    });
  }

  /* ==========================================================================
     SERVICES CATEGORY FILTER TABS
     ========================================================================== */
  function initServicesFilter() {
    const filterPills = document.querySelectorAll('.services-filter-pill');
    const categoryBlocks = document.querySelectorAll('.service-category-block');
    if (!filterPills.length || !categoryBlocks.length) return;

    function applyFilter(filterVal) {
      // Update active tab state
      filterPills.forEach(function (p) {
        if (p.getAttribute('data-service-filter') === filterVal) {
          p.classList.add('is-active');
          p.setAttribute('aria-selected', 'true');
        } else {
          p.classList.remove('is-active');
          p.setAttribute('aria-selected', 'false');
        }
      });

      // Show/hide category blocks
      categoryBlocks.forEach(function (block) {
        const category = block.getAttribute('data-category');
        if (filterVal === 'all' || category === filterVal) {
          block.classList.remove('is-filtered-out');
        } else {
          block.classList.add('is-filtered-out');
        }
      });
    }

    filterPills.forEach(function (pill) {
      pill.addEventListener('click', function () {
        const filterVal = pill.getAttribute('data-service-filter');
        applyFilter(filterVal);
      });
    });

    // If an anchor link pointing to a specific service card is clicked (e.g. #service-commercial-building)
    // ensure its parent category block is visible so the user arrives at the card properly
    document.addEventListener('click', function (e) {
      const link = e.target.closest('a[href^="#service-"]');
      if (!link) return;
      const hash = link.getAttribute('href');
      if (!hash) return;
      const targetCard = document.querySelector(hash);
      if (targetCard) {
        const parentCatBlock = targetCard.closest('.service-category-block');
        if (parentCatBlock) {
          const cat = parentCatBlock.getAttribute('data-category');
          const activePill = document.querySelector('.services-filter-pill.is-active');
          const currentFilter = activePill ? activePill.getAttribute('data-service-filter') : 'all';
          if (currentFilter !== 'all' && currentFilter !== cat) {
            applyFilter('all');
          }
        }
      }
    });
  }

  /* ==========================================================================
     8. TRANSFORMATION & REVIEW FULL-VIEW LIGHTBOX MODAL
     ========================================================================== */
  function initTransformationLightbox() {
    const modal = document.getElementById('transformation-lightbox');
    const backdrop = document.getElementById('lightbox-backdrop');
    const closeBtn = document.getElementById('lightbox-close');
    const prevBtn = document.getElementById('lightbox-prev');
    const nextBtn = document.getElementById('lightbox-next');
    const imgEl = document.getElementById('lightbox-img');
    const locationEl = document.getElementById('lightbox-location');
    const titleEl = document.getElementById('lightbox-title');
    const descEl = document.getElementById('lightbox-desc');
    const counterEl = document.getElementById('lightbox-counter');
    const serviceEl = document.getElementById('lightbox-service');
    const quoteBtn = document.getElementById('lightbox-quote-action');

    if (!modal || !imgEl) return;

    // Gather transformations data from DOM
    const transformationCards = document.querySelectorAll('.real-job-card');
    const transformationsData = [];

    transformationCards.forEach(function (card) {
      const wrap = card.querySelector('.real-job-image-wrap');
      if (!wrap) return;
      transformationsData.push({
        type: 'transformation',
        src: wrap.getAttribute('data-full-img'),
        title: wrap.getAttribute('data-title') || '',
        location: wrap.getAttribute('data-location') || 'Columbus, OH',
        service: wrap.getAttribute('data-service') || 'Exterior Cleaning',
        desc: wrap.getAttribute('data-desc') || '',
      });
    });

    // Gather reviews photo data from DOM
    const reviewProofs = document.querySelectorAll('.review-photo-proof');
    const reviewData = [];

    reviewProofs.forEach(function (proof) {
      reviewData.push({
        type: 'review',
        src: proof.getAttribute('data-review-photo-src'),
        title: proof.getAttribute('data-review-photo-title') || 'Customer Review Photo',
        location: proof.getAttribute('data-review-photo-location') || 'Central Ohio',
        service: 'Verified Customer Photo',
        desc: proof.getAttribute('data-review-photo-desc') || 'Verified photo proof submitted by customer with 5-star Google review.',
      });
    });

    let currentDataset = transformationsData;
    let currentIndex = 0;
    let lastFocusedElement = null;

    function renderModal(index) {
      if (!currentDataset.length) return;
      currentIndex = (index + currentDataset.length) % currentDataset.length;
      const item = currentDataset[currentIndex];

      // Smooth opacity fade
      imgEl.style.opacity = '0.3';
      imgEl.src = item.src;
      imgEl.alt = item.title;

      imgEl.onload = function () {
        imgEl.style.opacity = '1';
      };

      if (locationEl) locationEl.textContent = item.location;
      if (titleEl) titleEl.textContent = item.title;
      if (descEl) descEl.textContent = item.desc;
      if (serviceEl) serviceEl.textContent = item.service;
      if (counterEl) {
        const label = item.type === 'review' ? 'Review Photo' : 'Project';
        counterEl.textContent = label + ' ' + (currentIndex + 1) + ' of ' + currentDataset.length;
      }

      // Configure quote button target service
      if (quoteBtn && item.service) {
        quoteBtn.setAttribute('data-service-select', item.service);
      }
    }

    function openModal(dataset, startIndex, triggerEl) {
      currentDataset = dataset;
      lastFocusedElement = triggerEl || document.activeElement;
      renderModal(startIndex);

      modal.classList.add('is-open');
      modal.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';

      // Accessibility focus
      setTimeout(function () {
        if (closeBtn) closeBtn.focus();
      }, 50);
    }

    function closeModal() {
      modal.classList.remove('is-open');
      modal.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';

      if (lastFocusedElement && typeof lastFocusedElement.focus === 'function') {
        lastFocusedElement.focus();
      }
    }

    function showPrev() {
      renderModal(currentIndex - 1);
    }

    function showNext() {
      renderModal(currentIndex + 1);
    }

    // Attach click and Enter key to transformation cards
    transformationCards.forEach(function (card, idx) {
      const wrap = card.querySelector('.real-job-image-wrap');
      const expandBtn = card.querySelector('.btn-card-expand');

      if (wrap) {
        wrap.addEventListener('click', function () {
          openModal(transformationsData, idx, wrap);
        });
        wrap.addEventListener('keydown', function (e) {
          if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            openModal(transformationsData, idx, wrap);
          }
        });
      }

      if (expandBtn) {
        expandBtn.addEventListener('click', function (e) {
          e.stopPropagation();
          openModal(transformationsData, idx, expandBtn);
        });
      }
    });

    // Attach click and Enter key to review photos
    reviewProofs.forEach(function (proof, idx) {
      proof.addEventListener('click', function () {
        openModal(reviewData, idx, proof);
      });
      proof.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          openModal(reviewData, idx, proof);
        }
      });
    });

    // Modal Controls
    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    if (backdrop) backdrop.addEventListener('click', closeModal);
    if (prevBtn) prevBtn.addEventListener('click', showPrev);
    if (nextBtn) nextBtn.addEventListener('click', showNext);

    // Keyboard navigation
    document.addEventListener('keydown', function (e) {
      if (!modal.classList.contains('is-open')) return;

      if (e.key === 'Escape') {
        closeModal();
      } else if (e.key === 'ArrowLeft') {
        showPrev();
      } else if (e.key === 'ArrowRight') {
        showNext();
      }
    });

    // Touch Swipe Support
    let touchStartX = 0;
    let touchEndX = 0;

    modal.addEventListener('touchstart', function (e) {
      if (e.touches && e.touches.length) {
        touchStartX = e.touches[0].clientX;
      }
    }, { passive: true });

    modal.addEventListener('touchend', function (e) {
      if (e.changedTouches && e.changedTouches.length) {
        touchEndX = e.changedTouches[0].clientX;
        const diffX = touchEndX - touchStartX;
        if (Math.abs(diffX) > 50) {
          if (diffX > 0) {
            showPrev();
          } else {
            showNext();
          }
        }
      }
    }, { passive: true });

    // Quote CTA inside modal: smoothly closes modal, preselects service in form, and scrolls down
    if (quoteBtn) {
      quoteBtn.addEventListener('click', function (e) {
        e.preventDefault();
        const selectedService = quoteBtn.getAttribute('data-service-select');
        closeModal();

        const quoteSection = document.getElementById('quote-section');
        const nameInput = document.getElementById('quote-name');

        if (selectedService) {
          selectServiceByName(selectedService);
        }

        if (quoteSection) {
          quoteSection.scrollIntoView({ behavior: 'smooth' });
          setTimeout(function () {
            if (nameInput) nameInput.focus();
          }, 600);
        }
      });
    }
  }

})();
