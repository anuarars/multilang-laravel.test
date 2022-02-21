'use strict';
document.addEventListener('DOMContentLoaded', () => {
  // Init Slider
  const mainSlider = new Swiper(".main-slider", {
    breakpoints: {
      320: {
        allowTouchMove: true,
        slidesPerView: 1,
        spaceBetween: 0,
        direction: 'vertical',
        autoHeight: true
      },
      992: {
        allowTouchMove: false,
        slidesPerView: 2,
        spaceBetween: 30,
      }
    }
  });
  // Init Calendar
  function calendar(el, out, cmode, count) {
    let modeCalendar = cmode;
    let monthsCount = count;
    flatpickr(el, {
      inline: true,
      locale: 'ru',
      monthSelectorType: 'static',
      yearSelectorType: 'static',
      dateFormat: "d-m-Y",
      mode: modeCalendar,
      showMonths: count,
      position: 'right',
      onClose: function(selectedDates, dateStr, instance) {
        var options = { year: 'numeric', month: 'long', day: 'numeric' };
        var getDay = selectedDates[0].toLocaleDateString("ru-RU", options).slice(0, -2);
        document.querySelector(out).innerHTML = dateStr;
      }
    });
  }

  // Filter Popup
  const filterAll = document.querySelectorAll('.filter__btn');
  const filterAllPopups = document.querySelectorAll('.filter__popup');

  function filterPopup(fBtn) {
    const filterBtn = document.querySelector(fBtn);
    if(filterBtn) {
      filterBtn.addEventListener('click', function() {
        if(!filterBtn.classList.contains('open')) {
          for(let item of filterAll) {
            item.classList.remove('open');
          }
          for(let item of filterAllPopups) {
            item.classList.remove('open');
          }
        }
        this.classList.toggle('open');
        this.nextElementSibling.classList.toggle('open');
      });
    }
  }
  function checkList(fList) {
    const listBtn = document.querySelectorAll(fList);
    const filterSubmit = document.querySelectorAll('.filterSubmit');

    listBtn.forEach((el, index, arr) => {
      el.addEventListener('click', function() {
        this.classList.toggle('checked');
        // Проверки у галочек
        if(index > 0) {
          listBtn[0].classList.remove('checked');
        }
        if(index === 0) {
          for(let i = 1; i < listBtn.length; i++) {
            arr[i].classList.remove('checked');
          }
        }
        for(let item of arr) {
          if(item.classList.contains('checked') && index > 0) {
            el.parentElement.nextElementSibling.removeAttribute('disabled');
          } else if(!item.classList.contains('checked') && !index > 0) {
            el.parentElement.nextElementSibling.setAttribute('disabled', 'disabled');
          }
        }
      });
      filterSubmit.forEach(el => {
        el.addEventListener('click', function() {
          el.parentElement.parentElement.previousElementSibling.classList.remove('open');
          el.parentElement.parentElement.classList.remove('open');
        })
      });
    });
  }

  filterPopup('.filterBtn1');
  checkList('.listBtn1');

  filterPopup('.filterBtn2');
  checkList('.listBtn2');

  filterPopup('.filterBtn3');
  checkList('.listBtn3');

  if(window.innerWidth > 767) {
    filterPopup('.btnDate');
    filterPopup('.btnDate2');

    calendar('.calendarJs', '.btnDate', 'single', 1);
    calendar('.calendarJs2', '.btnDate2', 'single', 1);
  }
  if(window.innerWidth < 768) {
    filterPopup('.btnDate');
    calendar('.calendarJs', '.btnDate', 'range', 2);
  }



  // Клик вне окна фильтры
  window.addEventListener('click', event => {
    const target = event.target;
    if(!target.closest('.filter__btn') && !target.closest('.filter-popup') ) {
      for(let item of filterAll) {
        item.classList.remove('open');
      }
      for(let item of filterAllPopups) {
        item.classList.remove('open');
      }
    }
  });

  // Поиск
  const searchField = document.querySelectorAll('.searchField');
  function searching() {
    searchField.forEach(el => {
      el.addEventListener('input', function() {
        let input = el.value.toLowerCase();
        let searchList = el.parentElement.parentElement.nextElementSibling.firstElementChild.children;
        console.log(searchList)
        for (let i = 0; i < searchList.length; i++) {
            if (!searchList[i].innerHTML.toLowerCase().includes(input)) {
                searchList[i].style.display = "none";
            }
            else {
                searchList[i].style.display = "block";
            }
        }
      });
    });
  } searching();

  // Очистка поля поиска
  searchField.forEach(el => {
    el.addEventListener('focus', function() {
      this.parentElement.classList.add('open');
    });
    el.parentElement.nextElementSibling.addEventListener('click', function(event) {
      el.value = '';
      searching();
      el.parentElement.classList.remove('open');
    });
  });

  // All Filters

  const allFilters = document.querySelector('.allFilters');
  const overlay = document.querySelector('.overlay');
  const popupAllFilter = document.querySelector('.popupAllFilter');
  const filterClose = document.querySelectorAll('.filterClose');
  const popupModal = document.querySelectorAll('.popupModal');
  const filterBack = document.querySelectorAll('.filterBack');

  if(allFilters) {
    allFilters.addEventListener('click', function() {
      popupAllFilter.classList.add('open');
      overlay.classList.add('open');
      document.body.style.overflow = 'hidden';
      overlay.addEventListener('click', function() {
        this.classList.remove('open');
        popupAllFilter.classList.remove('open');
        document.body.style.overflow = '';
      });
    });
  }
  filterClose.forEach(el => {
    el.addEventListener('click', () => {
      overlay.classList.remove('open');
      document.body.style.overflow = '';
      for(let item of popupModal) {
        item.classList.remove('open');
      }
    });
  });
  filterBack.forEach(function(el) {
    el.addEventListener('click', function() {
      el.parentElement.parentElement.classList.remove('open');
    });
  });


  // Modal
    class Mmodal {
    constructor(options = {}) {
      const {
        open = '.modalOpen',
        modal = '.modal',
        close = '.modalClose',
      } = options;

      this.open = open;
      this.modal = modal;
      this.close = close;
      this.init();
    }

    toggleModal() {
      const modal = document.querySelector(this.modal);
      const open = document.querySelectorAll(this.open);

      open.forEach(elem => {
        elem.addEventListener('click', (e) => {
          e.preventDefault();
          modal.classList.add('modal--open');
          modal.setAttribute('tabindex', '-1');

          modal.addEventListener('animationend', () => {
            modal.firstElementChild.classList.add('modal__content--open');
          });

          modal.addEventListener('click', event => {
            const target = event.target;
            console.log(event.target)
            if(target.closest(this.close) || target.closest(this.modal) && !target.closest('.modal__content')) {
              modal.firstElementChild.classList.remove('modal__content--open');
              modal.classList.remove('modal--open');
              modal.removeAttribute('tabindex');
            }
          });

        });

      });
    }

    init() {
      this.toggleModal();
    }
  }
  new Mmodal({
    open: '.modalOpenSearch',
    modal: '.modalSearch',
    close: '.modalClose'
  });

  // Search Modal
  const searchMainField = document.querySelector('.searchMainField');
  const searchRequest = document.querySelector('.searchRequest');
  const searchResult = document.querySelector('.searchResult');

  searchMainField.addEventListener('input', () => {
    if(searchMainField.value.length > 1 && !searchMainField.value.length == '') {
      searchRequest.classList.add('hidden');
      searchResult.classList.add('open');
    } else {
      searchRequest.classList.remove('hidden');
      searchResult.classList.remove('open');
    }

  });
});
