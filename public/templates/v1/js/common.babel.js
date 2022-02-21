'use strict';

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

document.addEventListener('DOMContentLoaded', function () {
  // Init Slider
  var mainSlider = new Swiper(".main-slider", {
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
        spaceBetween: 30
      }
    }
  }); // Init Calendar

  function calendar(el, out, cmode, count) {
    var modeCalendar = cmode;
    var monthsCount = count;
    flatpickr(el, {
      inline: true,
      locale: 'ru',
      monthSelectorType: 'static',
      yearSelectorType: 'static',
      dateFormat: "d-m-Y",
      mode: modeCalendar,
      showMonths: count,
      position: 'right',
      onClose: function onClose(selectedDates, dateStr, instance) {
        var options = {
          year: 'numeric',
          month: 'long',
          day: 'numeric'
        };
        var getDay = selectedDates[0].toLocaleDateString("ru-RU", options).slice(0, -2);
        document.querySelector(out).innerHTML = dateStr;
      }
    });
  } // Filter Popup


  var filterAll = document.querySelectorAll('.filter__btn');
  var filterAllPopups = document.querySelectorAll('.filter__popup');

  function filterPopup(fBtn) {
    var filterBtn = document.querySelector(fBtn);

    if (filterBtn) {
      filterBtn.addEventListener('click', function () {
        if (!filterBtn.classList.contains('open')) {
          var _iterator = _createForOfIteratorHelper(filterAll),
              _step;

          try {
            for (_iterator.s(); !(_step = _iterator.n()).done;) {
              var item = _step.value;
              item.classList.remove('open');
            }
          } catch (err) {
            _iterator.e(err);
          } finally {
            _iterator.f();
          }

          var _iterator2 = _createForOfIteratorHelper(filterAllPopups),
              _step2;

          try {
            for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
              var _item = _step2.value;

              _item.classList.remove('open');
            }
          } catch (err) {
            _iterator2.e(err);
          } finally {
            _iterator2.f();
          }
        }

        this.classList.toggle('open');
        this.nextElementSibling.classList.toggle('open');
      });
    }
  }

  function checkList(fList) {
    var listBtn = document.querySelectorAll(fList);
    var filterSubmit = document.querySelectorAll('.filterSubmit');
    listBtn.forEach(function (el, index, arr) {
      el.addEventListener('click', function () {
        this.classList.toggle('checked'); // Проверки у галочек

        if (index > 0) {
          listBtn[0].classList.remove('checked');
        }

        if (index === 0) {
          for (var i = 1; i < listBtn.length; i++) {
            arr[i].classList.remove('checked');
          }
        }

        var _iterator3 = _createForOfIteratorHelper(arr),
            _step3;

        try {
          for (_iterator3.s(); !(_step3 = _iterator3.n()).done;) {
            var item = _step3.value;

            if (item.classList.contains('checked') && index > 0) {
              el.parentElement.nextElementSibling.removeAttribute('disabled');
            } else if (!item.classList.contains('checked') && !index > 0) {
              el.parentElement.nextElementSibling.setAttribute('disabled', 'disabled');
            }
          }
        } catch (err) {
          _iterator3.e(err);
        } finally {
          _iterator3.f();
        }
      });
      filterSubmit.forEach(function (el) {
        el.addEventListener('click', function () {
          el.parentElement.parentElement.previousElementSibling.classList.remove('open');
          el.parentElement.parentElement.classList.remove('open');
        });
      });
    });
  }

  filterPopup('.filterBtn1');
  checkList('.listBtn1');
  filterPopup('.filterBtn2');
  checkList('.listBtn2');
  filterPopup('.filterBtn3');
  checkList('.listBtn3');

  if (window.innerWidth > 767) {
    filterPopup('.btnDate');
    filterPopup('.btnDate2');
    calendar('.calendarJs', '.btnDate', 'single', 1);
    calendar('.calendarJs2', '.btnDate2', 'single', 1);
  }

  if (window.innerWidth < 768) {
    filterPopup('.btnDate');
    calendar('.calendarJs', '.btnDate', 'range', 2);
  } // Клик вне окна фильтры


  window.addEventListener('click', function (event) {
    var target = event.target;

    if (!target.closest('.filter__btn') && !target.closest('.filter-popup')) {
      var _iterator4 = _createForOfIteratorHelper(filterAll),
          _step4;

      try {
        for (_iterator4.s(); !(_step4 = _iterator4.n()).done;) {
          var item = _step4.value;
          item.classList.remove('open');
        }
      } catch (err) {
        _iterator4.e(err);
      } finally {
        _iterator4.f();
      }

      var _iterator5 = _createForOfIteratorHelper(filterAllPopups),
          _step5;

      try {
        for (_iterator5.s(); !(_step5 = _iterator5.n()).done;) {
          var _item2 = _step5.value;

          _item2.classList.remove('open');
        }
      } catch (err) {
        _iterator5.e(err);
      } finally {
        _iterator5.f();
      }
    }
  }); // Поиск

  var searchField = document.querySelectorAll('.searchField');

  function searching() {
    searchField.forEach(function (el) {
      el.addEventListener('input', function () {
        var input = el.value.toLowerCase();
        var searchList = el.parentElement.parentElement.nextElementSibling.firstElementChild.children;
        console.log(searchList);

        for (var i = 0; i < searchList.length; i++) {
          if (!searchList[i].innerHTML.toLowerCase().includes(input)) {
            searchList[i].style.display = "none";
          } else {
            searchList[i].style.display = "block";
          }
        }
      });
    });
  }

  searching(); // Очистка поля поиска

  searchField.forEach(function (el) {
    el.addEventListener('focus', function () {
      this.parentElement.classList.add('open');
    });
    el.parentElement.nextElementSibling.addEventListener('click', function (event) {
      el.value = '';
      searching();
      el.parentElement.classList.remove('open');
    });
  }); // All Filters

  var allFilters = document.querySelector('.allFilters');
  var overlay = document.querySelector('.overlay');
  var popupAllFilter = document.querySelector('.popupAllFilter');
  var filterClose = document.querySelectorAll('.filterClose');
  var popupModal = document.querySelectorAll('.popupModal');
  var filterBack = document.querySelectorAll('.filterBack');

  if (allFilters) {
    allFilters.addEventListener('click', function () {
      popupAllFilter.classList.add('open');
      overlay.classList.add('open');
      document.body.style.overflow = 'hidden';
      overlay.addEventListener('click', function () {
        this.classList.remove('open');
        popupAllFilter.classList.remove('open');
        document.body.style.overflow = '';
      });
    });
  }

  filterClose.forEach(function (el) {
    el.addEventListener('click', function () {
      overlay.classList.remove('open');
      document.body.style.overflow = '';

      var _iterator6 = _createForOfIteratorHelper(popupModal),
          _step6;

      try {
        for (_iterator6.s(); !(_step6 = _iterator6.n()).done;) {
          var item = _step6.value;
          item.classList.remove('open');
        }
      } catch (err) {
        _iterator6.e(err);
      } finally {
        _iterator6.f();
      }
    });
  });
  filterBack.forEach(function (el) {
    el.addEventListener('click', function () {
      el.parentElement.parentElement.classList.remove('open');
    });
  }); // Modal

  var Mmodal = /*#__PURE__*/function () {
    function Mmodal() {
      var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

      _classCallCheck(this, Mmodal);

      var _options$open = options.open,
          open = _options$open === void 0 ? '.modalOpen' : _options$open,
          _options$modal = options.modal,
          modal = _options$modal === void 0 ? '.modal' : _options$modal,
          _options$close = options.close,
          close = _options$close === void 0 ? '.modalClose' : _options$close;
      this.open = open;
      this.modal = modal;
      this.close = close;
      this.init();
    }

    _createClass(Mmodal, [{
      key: "toggleModal",
      value: function toggleModal() {
        var _this = this;

        var modal = document.querySelector(this.modal);
        var open = document.querySelectorAll(this.open);
        open.forEach(function (elem) {
          elem.addEventListener('click', function (e) {
            e.preventDefault();
            modal.classList.add('modal--open');
            modal.setAttribute('tabindex', '-1');
            modal.addEventListener('animationend', function () {
              modal.firstElementChild.classList.add('modal__content--open');
            });
            modal.addEventListener('click', function (event) {
              var target = event.target;
              console.log(event.target);

              if (target.closest(_this.close) || target.closest(_this.modal) && !target.closest('.modal__content')) {
                modal.firstElementChild.classList.remove('modal__content--open');
                modal.classList.remove('modal--open');
                modal.removeAttribute('tabindex');
              }
            });
          });
        });
      }
    }, {
      key: "init",
      value: function init() {
        this.toggleModal();
      }
    }]);

    return Mmodal;
  }();

  new Mmodal({
    open: '.modalOpenSearch',
    modal: '.modalSearch',
    close: '.modalClose'
  }); // Search Modal

  var searchMainField = document.querySelector('.searchMainField');
  var searchRequest = document.querySelector('.searchRequest');
  var searchResult = document.querySelector('.searchResult');
  searchMainField.addEventListener('input', function () {
    if (searchMainField.value.length > 1 && !searchMainField.value.length == '') {
      searchRequest.classList.add('hidden');
      searchResult.classList.add('open');
    } else {
      searchRequest.classList.remove('hidden');
      searchResult.classList.remove('open');
    }
  });
});