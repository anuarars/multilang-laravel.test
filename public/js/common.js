'use strict';


document.addEventListener('DOMContentLoaded', () => {
  // Tooltip
  {
    const tooltipBtn = document.querySelectorAll('.tooltip-word');
    const tooltipClose = document.querySelectorAll('.tooltip__close');
    tooltipBtn.forEach((element, index, array) => {
      element.addEventListener('mouseover', () => {
        for(let item of array) {
          item.classList.remove('open');
        }
        element.classList.add('open');

        tooltipClose.forEach(element => {
          element.addEventListener('click', function() {
            element.parentElement.previousElementSibling.classList.remove('open');
          });
        });
      })
    });
  }
  // Tabs
  {
    {
      class Tabs {
        constructor(options = {}) {
          const {
            tab = '.tabItem',
            tabContents = '.tabContent',
          } = options;
          this.tab = tab;
          this.tabContents = tabContents;
          this.init();
        }
        init() {
          const tab = document.querySelectorAll(this.tab);
          const tabContents = document.querySelectorAll(this.tabContents);

          tab.forEach((element, index, array) => {
            element.addEventListener('click', () => {
              const tabContentItem = document.querySelector(`${element.dataset.target}`);
              for(let tabItems of array) {
                tabItems.classList.remove('active');
                tabItems.attributes['aria-selected'].value = false;
              }
              element.classList.add('active');
              element.attributes['aria-selected'].value = true;

              for(let tabContentItems of tabContents) {
                tabContentItems.classList.remove('active');
                tabContentItems.attributes['aria-selected'].value = false;
              }
              if(tabContentItem) {
                tabContentItem.classList.toggle('active');
                tabContentItem.attributes['aria-selected'].value = true;
              }
            })
          });
        }
      }
      new Tabs();
    }
  }
  // Video
  class LazyVideoYt {
    constructor(options = {}) {
      const {
        videoEl = '.LazyVideoYt',
      } = options;
      this.videoEl = videoEl;
      this.init();
    }
    init() {
      const videoEl = document.querySelectorAll(this.videoEl);

      videoEl.forEach((element, index, array) => {
        const videoUrl = `https://www.youtube.com/embed/${element.dataset.id}/?autoplay=1&${element.dataset.params}`;
        const imgUrl = `https://img.youtube.com/vi/${element.dataset.id}/maxresdefault.jpg`;
        const imgAlt = element.dataset.alt;
        const createIframe = function() {
          for (let items of array) {
            if (items.lastElementChild.tagName === 'IFRAME') {
              items.lastElementChild.remove();
            }
          }
          this.innerHTML +=
          `<iframe
            class="video__iframe"
            frameborder="0"
            src="${videoUrl}"
            width="100%"
            height="100%"
            allow="autoplay"
            allowfullscreen="allowfullscreen">
          </iframe>`;
        };

        if(element.firstElementChild.tagName === 'IMG') {
          element.addEventListener('click', createIframe);
        } else {
          element.innerHTML += `<img class="video__img" src="${imgUrl}" alt="${imgAlt}">`;
          element.addEventListener('click', createIframe);
        }
      });

    }
  }
  new LazyVideoYt();
  // Menu
  class Menu {
    constructor(options = {}) {
      const {
        hamburgerButton = '.HamburgerButton',
        navigationList = '.NavigationList',
        navigationListClose = '.NavigationListClose'
      } = options;

      this.hamburgerButton = hamburgerButton;
      this.navigationList = navigationList;
      this.navigationListClose = navigationListClose;
      this.init();
    }
    init() {
      const button = document.querySelector(this.hamburgerButton);
      const menu = document.querySelector(this.navigationList);
      const close = document.querySelector(this.navigationListClose);
      button.addEventListener('click', () => {
        let expanded = button.getAttribute('aria-expanded');

        (expanded === 'false') ?
        button.setAttribute('aria-expanded', true) :
        button.setAttribute('aria-expanded', false);
        menu.classList.toggle('active');
      });
      close.addEventListener('click', () => {
        button.setAttribute('aria-expanded', false);
        menu.classList.remove('active');
      });

      window.addEventListener('click', event => {
        const target = event.target;
        if(!target.closest(this.hamburgerButton) &&! target.closest(this.navigationList)) {
          button.setAttribute('aria-expanded', false);
          menu.classList.remove('active');
        }
      });
    }
  }
  new Menu();

  // Plus and Minus

  const minusBtn = document.querySelector('.tickets__btn--minus');
  const plusBtn = document.querySelector('.tickets__btn--plus');

  if(minusBtn && plusBtn) {
    plusBtn.addEventListener('click', function() {
      let val = this.previousElementSibling.innerText;
      this.previousElementSibling.innerText = +val + 1;
    });

    minusBtn.addEventListener('click', function() {
      let val = this.nextElementSibling.innerText;
      if(val !== '1') {
        this.nextElementSibling.innerText = val - 1;
      }
    });
  }

  // Modal

  class Modal {
    constructor(options = {}) {
      const {
        btnOpen = '.modalOpen',
        modalWindow = '.modalWindow',
        bntClose = '.modalClose',
        allModal = '.modal'
      } = options;

      this.btnOpen = btnOpen;
      this.modalWindow = modalWindow;
      this.btnClose = bntClose;
      this.allModal = allModal;
      this.init();
    }

    openModalWindow(openModalWindowOptions = {}) {
      const {
        openValue = false,
      } = openModalWindowOptions;
      const modalWindow = document.querySelector(this.modalWindow);
      const btnOpen = document.querySelectorAll(this.btnOpen);

      const openModal = () => {
        this.closeModalWindow();
        modalWindow.classList.add('modal--open');
        modalWindow.setAttribute('tabindex', '-1');
        modalWindow.focus();
        document.body.classList.add('page__body--open');
        modalWindow.addEventListener('animationend', () => {
          modalWindow.firstElementChild.classList.add('modal__content--open');
        });
      }

      if(openValue !== false) openModal();

      btnOpen.forEach(element => {
        element.addEventListener('click', event => {
          event.preventDefault();
          openModal();
        });
      });
    };

    closeModalWindow(closeModalWindowOptions = {}) {
      const {
        closeAll = true,
        closeValue = false,
      } = closeModalWindowOptions;

      const modalWindow = document.querySelector(this.modalWindow);
      const allModal = document.querySelectorAll(this.allModal);

      if(closeValue === true) closeModal();

      const closeModal = () => {
        document.body.classList.remove('page__body--open');
        modalWindow.firstElementChild.classList.remove('modal__content--open');
        modalWindow.classList.remove('modal--open');
        modalWindow.removeAttribute('tabindex');

        if(closeAll !== false) {
          for(let modalItem of allModal) {
            modalItem.firstElementChild.classList.remove('modal__content--open');
            modalItem.classList.remove('modal--open');
            modalItem.removeAttribute('tabindex');
          }
        }
      };

      modalWindow.addEventListener('click', event => {
        const target = event.target;
        if(target.closest(this.btnClose) || target.closest(this.modalWindow) && !target.closest('.modal__content') && !target.closest(this.btnOpen)) {
          closeModal();
        }
      });

      window.addEventListener('keydown', event => {
        if(event.key === 'Escape') closeModal();
      });
    };

    init() {
      this.openModalWindow();
    };
  };

  new Modal({
    btnOpen: '.openModalApplication',
    modalWindow: '.modalApplication'
  });
  new Modal({
    btnOpen: '.openModalTake',
    modalWindow: '.modalTake'
  });
  new Modal({
    btnOpen: '.openModalCouncil',
    modalWindow: '.modalCouncil'
  });
  new Modal({
    btnOpen: '.filterBtn',
    modalWindow: '.modalFilter'
  });

  // Logo Animate
  const logoAnimate = document.querySelectorAll('.logo-animate');

  logoAnimate.forEach(element => {
   const logoAnimateText = element.lastElementChild.lastElementChild.children;
    const mainTimeout = function() {
      setTimeout(() => {
        logoAnimateText[0].classList.remove('active');
        setTimeout(() => {
          logoAnimateText[1].classList.add('active');
          setTimeout(() => {
            logoAnimateText[1].classList.remove('active');
            setTimeout(() => {
              logoAnimateText[2].classList.add('active');
              setTimeout(() => {
                logoAnimateText[2].classList.remove('active');
                setTimeout(() => {
                  logoAnimateText[0].classList.add('active');
                  mainTimeout();
                }, 2000);
              }, 3000);
            }, 2000);
          }, 3000);
        }, 2000);
      }, 3000);
    }
    mainTimeout();

  });

  // Parallax
  const scene = document.querySelector('.parallax');
  if(scene) {
    const parallaxInstance = new Parallax(scene, {
      selector: '.parallax__layer',
      hoverOnly: true,
      relativeInput: true,
      pointerEvents: true,
      invertX: false,
      invertY: false,
      limitX: true,
      litiyY: true,
      precision: 5,
    });
  }

  // Video winner

  const playWinnerVideo = document.querySelectorAll('.playWinnerVideo');

  playWinnerVideo.forEach((element, index, array) => {
    const winnerVideo = element.parentElement.parentElement.nextElementSibling.firstElementChild;

    function removeVideo() {
      if(winnerVideo.lastElementChild.tagName === 'IFRAME') {
        winnerVideo.lastElementChild.remove();
      }
      element.classList.remove('active');
      winnerVideo.classList.remove('active');
    }

    element.addEventListener('click', () => {
      if(element.classList.contains('active')) {
        removeVideo();
      } else {
        for(let item of array) {
          item.classList.remove('active');
          item.parentElement.parentElement.nextElementSibling.firstElementChild.classList.remove('active');
        }
        element.classList.add('active');
        winnerVideo.classList.add('active');
        winnerVideo.click();
      }
    });
    window.addEventListener('click', (e) => {
      if(!e.target.closest('.playWinnerVideo') && !e.target.closest('.winnerVideo')) {
       removeVideo();
      }
    });
  });

  // Animations
  document.querySelectorAll('.numbersAnimation').forEach(element => {
    var animation = bodymovin.loadAnimation({
      container: element,
      path: './js/numbers.json',
      renderer: 'svg',
      loop: true,
      autoplay: true,
    })
  });


  // Sliders

  document.querySelectorAll('.mediaGallery').forEach(el => {
    var swiper = new Swiper(el.querySelector('.mySwiper'), {
      spaceBetween: 7,
      slidesPerView: 'auto',
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(el.querySelector('.mySwiper2'), {
      spaceBetween: 7,
      pagination: {
        el: ".swiper-pagination",
        type: "fraction",
      },
      thumbs: {
        swiper: swiper,
      },
    });
  });

  // Media Popup

  const mediaItem = document.querySelectorAll('.mediaItem');
  const mediaSlider = document.querySelectorAll('.mediaSlider');
  const mediaSliderClose = document.querySelectorAll('.mediaSliderClose');

  mediaItem.forEach(element => {
    element.addEventListener('click', () => {
      element.nextElementSibling.classList.add('active');
    });
    const photoCountText = element.nextElementSibling.firstElementChild.firstElementChild.lastElementChild.innerHTML;
    const photoCountElement = element.firstElementChild.firstElementChild.lastElementChild;
    photoCountElement.innerHTML = photoCountText;
  });
  mediaSliderClose.forEach(element => {
    element.addEventListener('click', () => {
      element.parentElement.parentElement.classList.remove('active');
    });
  });
  document.addEventListener('click', event => {
    const target = event.target;
    if(!target.closest('.media-slider') && !target.closest('.media-item')) {
      for(let item of mediaSlider) {
        item.classList.remove('active');
      }
    }
  });

  // Filters
  const filterBtn = document.querySelector('.filterBtn');
  if(filterBtn) {
    let handleIntersection = function (entries) {
      for (let entry of entries) {
          if (!entry.isIntersecting) {
              filterBtn.classList.add('open')
          } else {
            filterBtn.classList.remove('open')
          }
      }
    }
    let handleIntersection2 = function (entries) {
      for (let entry of entries) {
          if (entry.isIntersecting) {
            filterBtn.classList.remove('open')
          } else {
            filterBtn.classList.add('open')
          }
      }
    }
    function observerHeader() {
      if(window.innerWidth >= 768) {
        const observer1 = new IntersectionObserver(handleIntersection);
        const observer2 = new IntersectionObserver(handleIntersection2);

        observer1.observe(document.querySelector('.page-header'));
        if(document.querySelector('.titleObserver')) {
          observer2.observe(document.querySelector('.titleObserver'));
        }
      }
    }
    observerHeader();
    window.addEventListener('resize', observerHeader);


  }

  //
  const filtersBtnOpen = document.querySelectorAll('.filtersBtnOpen');
  const filtersModalClose = document.querySelectorAll('.filtersModalClose');
  const filtersModal = document.querySelectorAll('.filtersModal');

  filtersBtnOpen.forEach(element => {
    element.addEventListener('click', () => {
      element.nextElementSibling.classList.add('active');
      element.parentElement.closest('.modal-wrap').style.overflow = 'hidden';
    });
  });

  filtersModalClose.forEach(element => {
    element.addEventListener('click', () => {
      for(let item of filtersModal) {
        item.classList.remove('active');
        item.closest('.modal-wrap').style.overflow = '';
      }
    });
  });

  //
  const filtersForm = document.querySelector('.filtersForm');

  if(filtersForm) {
    const formElements = filtersForm.elements;
    function howCheckedInputsAll() {
      let inputs = [...formElements].filter(item => item.classList.contains('fm-item__checkbox--word'));
      let checkedInputs = inputs.filter(item => item.checked === true);
      if(checkedInputs.length > 0) {
        filterBtn.classList.remove('filter-btn--void');
        filterBtn.firstElementChild.firstElementChild.innerHTML = checkedInputs.length;
      } else {
        filterBtn.classList.add('filter-btn--void');
        filterBtn.firstElementChild.firstElementChild.innerHTML = '';
        delete localStorage.choosesFilters;
      }

    } howCheckedInputsAll();

    filtersForm.addEventListener('input', howCheckedInputsAll);
  }

  const fromM = document.querySelectorAll('.fm-item__checkbox[name=from-m]');
  const fromY = document.querySelectorAll('.fm-item__checkbox[name=from-y]');
  const toM = document.querySelectorAll('.fm-item__checkbox[name=to-m]');
  const toY = document.querySelectorAll('.fm-item__checkbox[name=to-y]');
  const filtersTitleDate = document.querySelector('.filtersTitleDate');
  const dateTitle = document.querySelector('.fm-title[data-date]');

  function checkDate() {
      const checkFromM = localStorage.fromM !== null && localStorage.fromM !== undefined;
      const checkFromY = localStorage.fromY !== null && localStorage.fromY !== undefined;
      const checkToM = localStorage.toM !== null && localStorage.toM !== undefined;
      const checkToY = localStorage.toY !== null && localStorage.toY !== undefined;

      if(checkFromM && checkFromY) {
        filtersTitleDate.classList.add('active');
        dateTitle.dataset.date = `${localStorage.fromM}, ${localStorage.fromY}`;
        filtersTitleDate.lastElementChild.innerHTML = `${localStorage.fromM}, ${localStorage.fromY}`;
      }
      else if(checkFromM) {
        filtersTitleDate.classList.add('active');
        dateTitle.dataset.date = `${localStorage.fromM}`;
        filtersTitleDate.lastElementChild.innerHTML = `${localStorage.fromM}`;
      }
      else if(checkFromY) {
        filtersTitleDate.classList.add('active');
        dateTitle.dataset.date = `${localStorage.fromY}`;
        filtersTitleDate.lastElementChild.innerHTML = `${localStorage.fromY}`;
      }
       if(checkFromY && checkToY) {
        filtersTitleDate.classList.add('active');
        dateTitle.dataset.date = `${localStorage.fromY} - ${localStorage.toY}`;
      }
      if(checkFromM && checkFromY && checkToY) {
        filtersTitleDate.classList.add('active');
        dateTitle.dataset.date = `${localStorage.fromM}, ${localStorage.fromY}…${localStorage.toY}`;
      }
      if(checkFromM && checkFromY && checkToM) {
        filtersTitleDate.classList.add('active');
        dateTitle.dataset.date = `${localStorage.fromM}, ${localStorage.fromY}…${localStorage.toM}`;
        filtersTitleDate.lastElementChild.innerHTML = `${localStorage.fromM}, ${localStorage.fromY}…${localStorage.toM}`;
      }
      if (checkFromM && checkFromY && checkToM && checkToY) {
        filtersTitleDate.classList.add('active');
        dateTitle.dataset.date = `${localStorage.fromM}, ${localStorage.fromY} ... ${localStorage.toM}, ${localStorage.toY}`;
        filtersTitleDate.lastElementChild.innerHTML = `${localStorage.fromM}, ${localStorage.fromY} ... ${localStorage.toM}, ${localStorage.toY}`;
      }

  }



  fromM.forEach((el, i, a) => {
    function addToStoge() {
      if(el.checked === true) {
        localStorage.setItem('fromM', el.nextElementSibling.innerText);
        checkDate();
      } else {
        delete localStorage.fromM;
      }
    } addToStoge();
    el.addEventListener('click', () => {
      addToStoge();
      for(let item of toM) {
        item.removeAttribute('disabled')
        if(+el.dataset.mvalue >= +item.dataset.mvalue) {
          item.setAttribute('disabled', 'disabled')
        }
      }
    });
  });

  fromY.forEach((el, i, a) => {
   function addToStoge() {
      if(el.checked === true) {
        localStorage.setItem('fromY', el.nextElementSibling.innerText);
        checkDate();
      } else {
        delete localStorage.fromY;
      }
    } addToStoge();
    el.addEventListener('click', () => {
      addToStoge();

      for(let item of toY) {
        item.removeAttribute('disabled')
        if(el.value > item.value) {
          item.setAttribute('disabled', 'disabled')
        }
      }
    });
  });

  toM.forEach((el, i, a) => {
    function addToStoge() {
      if(el.checked === true) {
         localStorage.setItem('toM', el.nextElementSibling.innerText);
        checkDate();
      } else {
        delete localStorage.toM;
      }
    } addToStoge();
    el.addEventListener('click', () => {
      addToStoge();
      for(let item of fromM) {
        item.removeAttribute('disabled')
        if(+el.dataset.mvalue <= +item.dataset.mvalue) {
          item.setAttribute('disabled', 'disabled')
        }
      }
    });
  });

  toY.forEach(el => {
    function addToStoge() {
      if(el.checked === true) {
        localStorage.setItem('toY', el.nextElementSibling.innerText);
        checkDate();
      } else {
        delete localStorage.toY;
      }
    } addToStoge();
    el.addEventListener('click', () => {
      addToStoge();
      for(let item of toM) {
        item.removeAttribute('disabled')
        if(+el.dataset.mvalue <= +item.dataset.mvalue) {
          item.setAttribute('disabled', 'disabled')
        }
      }
    });
  });

  function filterKeywords(modal, title) {
    const modalFiltersInputs = document.querySelectorAll(`${modal} .fm-item__checkbox`);
    const modalFiltersButtons = document.querySelectorAll(`${modal} .filter-submit`);
    const modalFiltersTitle = document.querySelector(title);
    const clearAllFilters = document.querySelector('.clearAllFilters');
    const clearCurrentFilters = document.querySelectorAll('.clearCurrentFilters');
    const filtersChooses = document.querySelectorAll('.filters__btn-chooses');

    let chooseItems = [];
    function removeValue(arr, value) {
      for(var i = 0; i < arr.length; i++) {
          if(arr[i] === value) {
              arr.splice(i, 1);
              break;
          }
      }
      return arr;
    }
    modalFiltersInputs.forEach((e, i, a) => {
      function removeFiltersCounters() {
        e.closest(`${modal} .filters-wrap`).firstElementChild.dataset.count = '';
        if(modalFiltersTitle) {
          modalFiltersTitle.classList.remove('choose');
          modalFiltersTitle.firstElementChild.dataset.count = '';
        }
      }

      function clearFilters() {
        for(let inputs of modalFiltersInputs) {
          inputs.checked = false;
        }
        for(let btns of modalFiltersButtons) {
          btns.setAttribute('disabled', 'disabled');
        }
        removeFiltersCounters();
        clearAllFilters.classList.add('hide');
        filtersTitleDate.lastElementChild.innerHTML = 'Choose month and year';
        filtersTitleDate.classList.remove('active');
        dateTitle.dataset.date = '';
        localStorage.clear();
        filterBtn.classList.add('filter-btn--void');
        filterBtn.firstElementChild.firstElementChild.innerHTML = '';
        for(let choosesItem of filtersChooses) {
          choosesItem.style.display = 'none'
          choosesItem.previousElementSibling.style.display = ''
        }
      } clearFilters();

      function getChooseFilters() {
        if(e.checked && !chooseItems.includes(e.nextElementSibling.textContent.trim())) {
          if(chooseItems.length <= 4) {
            chooseItems.push(e.nextElementSibling.textContent.trim());
            localStorage.setItem('choosesFilters', chooseItems);
            e.parentElement.closest('.filters-modal').previousElementSibling.lastElementChild.lastElementChild.innerHTML = localStorage.getItem('choosesFilters').replace(/,/g, ', ');
          } else {
            e.parentElement.closest('.filters-modal').previousElementSibling.lastElementChild.lastElementChild.innerHTML = localStorage.getItem('choosesFilters').replace(/,/g, ', ') + ' ...';
          }
          e.parentElement.closest('.filters-modal').previousElementSibling.lastElementChild.firstElementChild.style.display = 'none';
          e.parentElement.closest('.filters-modal').previousElementSibling.lastElementChild.lastElementChild.style.display = '';
        } else  {

          removeValue(chooseItems, e.nextElementSibling.textContent.trim());
          localStorage.setItem('choosesFilters', chooseItems);

          if(chooseItems.length >= 4) {
            e.parentElement.closest('.filters-modal').previousElementSibling.lastElementChild.lastElementChild.innerHTML = localStorage.getItem('choosesFilters').replace(/,/g, ', ');
          } else {
            e.parentElement.closest('.filters-modal').previousElementSibling.lastElementChild.lastElementChild.innerHTML = localStorage.getItem('choosesFilters').replace(/,/g, ', ') + ' ...';
          }
          if(chooseItems.length === 0) {
            delete localStorage.choosesFilters;
              e.parentElement.closest('.filters-modal').previousElementSibling.lastElementChild.lastElementChild.style.display = 'none';
              e.parentElement.closest('.filters-modal').previousElementSibling.lastElementChild.firstElementChild.style.display = '';
          }
        }

      }
      function howCheckedInputs() {
        let checkedInputs = [...a].filter(item => item.checked === true);
        if(checkedInputs.length > 0) {
          e.closest(`${modal} .filters-wrap`).firstElementChild.dataset.count = checkedInputs.length;
          if(modalFiltersTitle) {
            modalFiltersTitle.classList.add('choose');
            modalFiltersTitle.firstElementChild.dataset.count = +e.closest(`${modal} .filters-wrap`).firstElementChild.dataset.count;
          }
          if(!e.classList.contains('fm-item__checkbox--to')) {
            for(let btns of modalFiltersButtons) {
              btns.removeAttribute('disabled');
            }
          }
          clearAllFilters.classList.remove('hide');
        } else {
          removeFiltersCounters();
          for(let btns of modalFiltersButtons) {
            btns.setAttribute('disabled', 'disabled');
          }
        }
      } howCheckedInputs();

      e.addEventListener('click', function() {
        howCheckedInputs();
        if(!e.classList.contains('fm-item__checkbox--date')) {
          getChooseFilters();
        }
      });
      clearAllFilters.addEventListener('click', clearFilters);

      clearCurrentFilters.forEach(el => {
        const currentCheckboxes = el.parentElement.previousElementSibling.parentElement.querySelectorAll('.fm-item__checkbox');
        const currentTitle = el.parentElement.parentElement.querySelector('.fm-title');
        const currentMainTitle = el.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.previousElementSibling;

        el.addEventListener('click', () => {

          for(let item of currentCheckboxes) {
            item.checked = false;
          }

          currentTitle.dataset.count = '';
          currentTitle.dataset.date = '';
          currentMainTitle.firstElementChild.dataset.count = '';
          currentMainTitle.classList.remove('choose');

          el.setAttribute('disabled', 'disabled');
          el.previousElementSibling.setAttribute('disabled', 'disabled');
          filterBtn.firstElementChild.firstElementChild.innerHTML = '';
          localStorage.clear();
          if(e.parentElement.closest('.filters-modal').previousElementSibling.lastElementChild.lastElementChild) {
            e.parentElement.closest('.filters-modal').previousElementSibling.lastElementChild.lastElementChild.style.display = 'none';
            e.parentElement.closest('.filters-modal').previousElementSibling.lastElementChild.firstElementChild.style.display = '';
          }

        });
      });
    });


  }




  if(location.pathname === '/publications.html') {
    document.querySelector('.fmRowAll').style.display = 'none';
    document.querySelector('.fmRowMedia').style.display = 'none';
  } else if(location.pathname === '/media.html') {
    document.querySelector('.fmRowAll').style.display = 'none';
    document.querySelector('.fmRowPublications').style.display = 'none';
  } else {
    document.querySelector('.fmRowMedia').style.display = 'none';
    document.querySelector('.fmRowPublications').style.display = 'none';
  }

  filterKeywords('.modalAgenda', '.filtersTitleAgenda');
  filterKeywords('.modalExperts', '.filtersTitleExperts');
  filterKeywords('.modalKeywords', '.filtersTitleKeywords');
  filterKeywords('.modalMaterial', '.filtersTitleMaterial');
  filterKeywords('.modalDate', '.filtersTitleDate');
});
