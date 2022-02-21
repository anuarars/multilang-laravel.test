/* kostyl */
var sidebarMenuItem = $('.sidebar-menu li:first a');
if (['Summer School', 'Award'].indexOf(sidebarMenuItem.text()) > -1) {
    sidebarMenuItem.text('Main information')
} else if (['Летняя Школа', 'Премия'].indexOf(sidebarMenuItem.text()) > -1) {
    sidebarMenuItem.text('Основная информация')
}

function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

$(document).ready(function () {
    // MAIN
    $('[rel^="lightbox"]').fancybox();
    //$('[type=tel]').mask("+9 (999) 999-99-99");
    $('.menu > ul').toMobileMenu();


    // MENUS
    var lang = $('html').attr('lang');
    $('a').each(function () {
        var href = $(this).attr('href'),
            r = new RegExp('^//|^#|:|\\.|^/ru$|^/en$|^/ru/|^/en/', 'i');
        if (typeof href !== 'undefined' && !r.test(href)) {
            $(this).attr('href', '/' + lang + href)
        }
    });

    $('.menu a[href="' + window.location.pathname + '"]').addClass('active');

    $('.sidebar-menu a[href="' + window.location.pathname + '"]').addClass('active');
    $('.sidebar-menu a').each(function () {
        var name = $(this).attr('href').split('/').pop();
        $(this).addClass('menu-' + name);
    });


    $('.ticker').each(function () {
        var items = $(this).find('.item'),
            index = 1;

        items.eq(0).addClass('active');

        setInterval(function () {
            items.eq(index).addClass('active').siblings().removeClass('active');
            if (index < items.length - 1) {
                index++
            } else {
                index = 0;
            }
        }, 3000);
    });

/*
    //diagramm
    let ruLabels = [
        'Администрация Президента РФ',
        'Аналитический центр при Правительстве РФ',
        'Аппарат Правительства РФ',
        'Банк России',
        'ВЭБ.РФ',
        'Газпром нефть',
        'Газпромбанк',
        'Комиссия международного права',
        'МегаФон',
        'Министерство иностранных дел РФ',
        'Министерство РФ по развитию Дальнего Востока и Арктики',
        'Министерство финансов РФ',
        'Министерство экономического развития РФ',
        'Министерство юстиции РФ',
        'Росавиация',
        'Росгвардия',
        'Росрыболовство',
        'Росстандарт',
        'СИБУР Холдинг',
        'Специальный представитель Президента РФ по международному сотрудничеству в Арктике и Антарктике',
        'Умные зерна',
        'ФГБУ "ВНИИОкеангеология"',
        'Федеральная налоговая служба',
        'Фонд "Сколково"',
    ];

    let enLabels = [
        'Administration of the President of the Russian Federation',
        'Analytical Center for the Government of the Russian Federation',
        'Executive Office of the Government of the Russian Federation',
        'Bank of Russia',
        'VEB.RF',
        'Gazprom Neft',
        'Gazprombank',
        'MegaFon',
        'The International Law Commission',
        'The Ministry of Foreign Affairs of the Russian Federation',
        'The Ministry for the Development of the Russian Far East and Arctic',
        'The Ministry of Finance of the Russian Federation',
        'The Ministry of Economic Development of the Russian Federation',
        'The Ministry of Justice of the Russian Federation',
        'The Federal Agency for Air Transport',
        'The Federal National Guard Service',
        'The Federal Agency for Fishery',
        'The Federal Agency on Technical Regulating and Metrology',
        'SIBUR',
        'Special Representative of the President of the Russian Federation on International Cooperation in the Arctic and Antarctic',
        'Smartseeds',
        'FSBI "VNIIOkeangeologia"',
        'The Federal Tax Service of Russia',
        'Skolkovo Foundation',
    ];
    let ctx = document.getElementById('myChart');
    let myPieChart = new Chart(ctx, {
        showInLegend: true,
        toolTipContent: "{name}: <strong>{y}%</strong>",
        indexLabel: "{name} - {y}%",
        type: 'pie',
        data: {
            labels: lang === 'ru'? ruLabels : enLabels,
            datasets: [{
                label: '# of Votes',
                data: [
                    11,
                    4,
                    7,
                    2,
                    2,
                    1,
                    6,
                    1,
                    1,
                    4,
                    2,
                    2,
                    32,
                    10,
                    1,
                    1,
                    1,
                    1,
                    1,
                    1,
                    1,
                    1,
                    1,
                    1,
                ],
                backgroundColor: [
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),

                ],
                borderColor: [
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                    getRandomColor(),
                ],
                borderWidth: 0
            }]
        },
        options: {
            legend: {
                display: true,
            }
        }
    });
*/
    var slider = $('.home-slider');
    slider.css('display', 'block');
    equalHeight($('.home-slider .item'));
    slider.css('display', '');
    slider.owlCarousel({
        loop: true,
        items: 1,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true
    });

    equalHeight($('.event-heading .row > div'));
    equalHeight($('.home-research .box'));
    equalHeight($('.speakers .item'));


    // SCHOOL
    $('[name="scholarship"]').click(function () {
        var city = $('#city_wrap');
        if ($(this).val() === 'Да') {
            city.show()
        } else {
            city.hide()
        }
    });

    // EVENTS
    $('.events-filter').eventFilter({
        delay: 300,
        target: $('.events-grid')
    });

    $('.events-grid .item .title').each(function () {
        var parent = $(this).parents('.item').outerHeight() - 110;
        if ($(this).height() > parent) {
            $(this).addClass('tiny')
        }
    });

    // REGISTRATION FORM
    $('#register form').submit(function (e) {
        var form = $(this);
        $('#error').html();
        $.ajax({
            type: 'POST',
            url: form.prop('action'),
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (response) {
                if ('message' in response) {
                    if (response.message == 'Создано') {
                        form.hide().next().show()
                    } else {
                        $('#error').html(response.message)
                    }
                }
            },
            error: function () {
            }
        });

        return false;
    });

    $('#bookform').submit(function (e) {
        e.preventDefault();
        var form = $(this);
        $('.error').html();
		console.log('#bookform is having this url for action:'+form.prop('action'));
        $.ajax({
            type: 'POST',
            url: form.prop('action'),
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (response) {
                if ('message' in response) {
                    if (response.message == 'Создано') {
                        $('#book').modal('hide');
                        $('#recommended').modal('show');
                    } else {
                        $('#bookform .error').html(response.message)
                    }
                }
            },
            error: function () {
            }
        });

        return false;
    });

    $('[name="time_visit"]').timepicker({
        timeFormat: 'HH:mm',
        interval: 60,
        minTime: '10:00',
        maxTime: '19:00',
        defaultTime: '10:00',
        startTime: '10:00',
        dynamic: false,
        dropdown: true,
        scrollbar: true
    });

    $( function() {
        $( "[name='date_visit']" ).datepicker({ dateFormat: 'yy-mm-dd' });
    } );

    $.datepicker.setDefaults(
        $.extend(
            {'dateFormat':'yy-mm-dd'},
            $.datepicker.regional[lang]
        )
    );

    $('#visitform').submit(function (e) {
        e.preventDefault();

        var form = $(this);
        $('.error').html();
        $.ajax({
            type: 'POST',
            url: form.prop('action'),
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (response) {
                if ('message' in response) {
                    if (response.message == 'Создано') {
                        $('#visit').modal('hide');
                        $('#sent').modal('show');
                    } else {
                        $('#visitform .error').html(response.message)
                    }
                }
            },
            error: function () {
            }
        });
        return false;
    });

    $('#ticketform').submit(function (e) {
        e.preventDefault();

        var form = $(this);
        $('.error').html();
        $.ajax({
            type: 'POST',
            url: form.prop('action'),
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (response) {
                if ('message' in response) {
                    if (response.message == 'Создано') {
                        $('#ticket').modal('hide');
                        $('#sent').modal('show');
                    } else {
                        console.log('why')
                        $('#ticketform .error').html(response.message)
                    }
                }
            },
            error: function () {

            }
        });
        return false;
    });

    $('#register form input[name="name"]').bind('keyup',function(){
        if (lang === 'en')
            $(this).val($(this).val().replace(/[^A-z0-9 ]/gi, ""))
        else
            $(this).val($(this).val().replace(/[^А-я0-9 ]/gi, ""))
    });

    $('#register form input[name="surname"]').bind('keyup',function(){
        if (lang === 'en')
            $(this).val($(this).val().replace(/[^A-z0-9 ]/gi, ""))
        else
            $(this).val($(this).val().replace(/[^А-я0-9 ]/gi, ""))
    });

    $('#register form input[name="organization"]').bind('keyup',function(){
        if (lang === 'en')
            $(this).val($(this).val().replace(/[^A-z0-9 ]/gi, ""))
        else
            $(this).val($(this).val().replace(/[^А-я0-9 ]/gi, ""))
    });

    $('#register form input[name="position"]').bind('keyup',function(){
        if (lang === 'en')
            $(this).val($(this).val().replace(/[^A-z0-9 ]/gi, ""))
        else
            $(this).val($(this).val().replace(/[^А-я0-9 ]/gi, ""))
    });


    //----------------------------------

    $('.modal form input[name="name"]').bind('keyup',function(){
        if (lang === 'en')
            $(this).val($(this).val().replace(/[^A-z0-9 ]/gi, ""))
        else
            $(this).val($(this).val().replace(/[^А-я0-9 ]/gi, ""))
    });

    $('.modal form input[name="surname"]').bind('keyup',function(){
        if (lang === 'en')
            $(this).val($(this).val().replace(/[^A-z0-9 ]/gi, ""))
        else
            $(this).val($(this).val().replace(/[^А-я0-9 ]/gi, ""))
    });

    $('.modal form input[name="occupation"]').bind('keyup',function(){
        if (lang === 'en')
            $(this).val($(this).val().replace(/[^A-z0-9 ]/gi, ""))
        else
            $(this).val($(this).val().replace(/[^А-я0-9 ]/gi, ""))
    });

    $('.modal form input[name="position"]').bind('keyup',function(){
        if (lang === 'en')
            $(this).val($(this).val().replace(/[^A-z0-9 ]/gi, ""))
        else
            $(this).val($(this).val().replace(/[^А-я0-9 ]/gi, ""))
    });

    //----------------------------------


    $('.show_all').click(function () {
        $(this).hide().parents('.cropped').removeClass('cropped')
    })

    // NEW LINK BUTTON LOGIC

    $('.event-data .linkbutton').each(function () {
        var link = $(this).attr('link');

        $(this).on('click', function() {
            window.open(link, '_blank')
        })
    })
});



function equalHeight(columns) {
    var max = 0;
    columns.each(function () {
        if (!$(this).is(":visible")) return;
        var height = $(this).outerHeight();
        if (height > max) {
            max = height;
        }
    }).css('min-height', max);
}



(function ($) {
    $.fn.eventFilter = function (options) {
        o = $.extend({
            delay: 300,
            target: false
        }, options);

        var form,
            init = function () {
                if (!o.target) {
                    return;
                }
                form = $(this);
                form.find('input[type="search"]').keyup($.debounceLast(300, filter));
                form.find('input[type="checkbox"]').change(filter);
                form.find('select').change(filter);
            },
            filter = function () {
                var criteria = getCriteria();
                doFilter(criteria);
            },
            getCriteria = function () {
                var fields = form.find(':input').serializeArray(),
                    criteria = {s: '', type: [], from: 0, to: 0},
                    from = {}, to = {};

                $.each(fields, function (i, field) {
                    if (field.name === 'type[]') {
                        criteria.type.push(+field.value);
                    } else if (field.name === 's') {
                        criteria.s = field.value;
                    } else if ($.inArray(field.name, ['month_from', 'year_from']) > -1) {
                        from[field.name] = field.value
                    } else if ($.inArray(field.name, ['month_to', 'year_to']) > -1) {
                        to[field.name] = field.value
                    }
                });

                criteria.from = new Date(from['year_from'], from['month_from']);
                criteria.to = new Date(to['year_to'], to['month_to']);

                return criteria;
            },
            doFilter = function (criteria) {
                o.target.find('[data-type]').hide().each(function () {
                    if (isNeeded($(this), criteria)) {
                        $(this).show()
                    }
                })
            },
            isNeeded = function (el, criteria) {
                var foundText = true;
                if (criteria.s !== '') {
                    foundText = el.text().toLowerCase().indexOf(criteria.s.toLowerCase()) > -1;
                }

                var date = new Date(el.data('time') * 1000);

                return $.inArray(el.data('type'), criteria.type) > -1 &&
                    criteria.from <= date && date <= criteria.to &&
                    foundText;
            };

        return this.each(init);
    };

})(window.jQuery || window.$);



(function ($, document, window) {
    $.fn.toMobileMenu = function () {
        if ($(window).width() > 480) {
            return;
        }
        $('body').prepend('<a class="mobile-menu">Меню ' +
            '<span class="glyphicon glyphicon-menu-hamburger pull-right"></span></a>' +
            '<div class="mobile-holder">' +
            $('header .logo').html() +
            '<ul></ul></div><div class="mobile-pad"></div>')
            .append('<div class="mobile-backdrop"></div>');
        this.find('>li').appendTo($('.mobile-holder ul'));
        this.remove();

        $('.mobile-menu, .mobile-backdrop').on('click', function () {
            $('.mobile-backdrop, .mobile-holder').toggleClass('in')
        });

        $('.mobile-holder ul ul').each(function () {
            $(this).parent().prepend('<span class="mobile-toggler">+</span>')
        });
        $('.mobile-toggler').on('click', function () {
            $(this).next().next().slideToggle()
        })
    };
})(window.jQuery || window.$, document, window);



$(function () {
    var $sidebar = $(".sidebar-menu"),
        $window = $(window),
        offset = $sidebar.offset(),
        topPadding = 30,
		$colH=$('.col-sm-8').height(),
		$sidebarH=$(".sidebar-menu").height();
		

    if ($window.width() < 480 || !$sidebar.length) return;

    $window.scroll(function () {
        margin = topPadding;
        if ($window.scrollTop() > offset.top ) {
            margin = Math.min($colH-$sidebarH - topPadding, $window.scrollTop() - offset.top + topPadding);            
			// console.log('$window.scrollTop()='+$window.scrollTop()+' offset.top='+offset.top+' offset.top+topPadding='+(offset.top+topPadding)+'$colH='+$colH+';margin='+margin);
        }

        $sidebar.css({
            marginTop: margin
        });
    });
});

// Apply CSS height to every iframe in correct ratio to it’s current width
function resizeIframes() {
    // Loop over every iframe on the page
    $('.event-data iframe').each(function() {
        // Get the iframe’s intended aspect ratio via it’s inline dimensions
        var ratio = $(this).attr('height') / $(this).attr('width')
        // Apply a CSS height that is in correct ratio to it’s current width
        $(this).css('height', $(this).width() * ratio)
    })
}
$('.event-data iframe').css('max-width', '100%');
// Pop off an initial resize when the page loads
resizeIframes()

// Update iframes each time the window is resized
$(window).resize(function() {
    resizeIframes()
});

$(document).ready(function(){
    var lang = $('html').attr('lang');
    var moreText = lang === 'ru' ? 'Подробнее' : 'More';
	$('.award-council .text').each(function(){
			awctHeight=$('.award-council .text').prop('scrollHeight');
			currHeight=$('.award-council .text').height();

			console.log('awctHeight='+awctHeight+' currHeight='+currHeight);
			if(awctHeight > currHeight){
				//console.log('awctHeight='+awctHeight+' maxH='+maxH+', inserting MoreButton');
				$('<div class="MoreButton">' + moreText + '</div>').insertAfter(this);
			}
	});
});
$(document).ready(function(){
    var lang = $('html').attr('lang');
    var moreText = lang === 'ru' ? 'Подробнее' : 'More';
	$('.soviet .description').each(function(){
			awctHeight=$('.soviet .description').prop('scrollHeight');
			currHeight=$('.soviet .description').height();

			console.log('awctHeight='+awctHeight+' currHeight='+currHeight);
			if(awctHeight > currHeight){
				//console.log('awctHeight='+awctHeight+' maxH='+maxH+', inserting MoreButton');
				$('<div class="MoreButton">' + moreText + '</div>').insertAfter(this);
			}
	});
});

$(document).on('click', '.MoreButton', function(){
    $(this).parent().children('.text').css({'height':'auto'});
    $(this).parent().children('.description').css({'height':'auto'});

    var lang = $('html').attr('lang');
    var collapseText = lang === 'ru' ? 'Свернуть' : 'Collapse';
	$(this).text(collapseText);
	$(this).addClass('unFoldIt');
});
$(document).on('click', '.unFoldIt', function(){
	if($(this).parent().children('.text').length >0){
		$(this).parent().children('.text').css({'height':'4em'});
	}
	if($(this).parent().children('.description').length >0){
		$(this).parent().children('.description').css({'height':'4em'});
	}
    $(this).removeClass('unFoldIt');
    
    
    var lang = $('html').attr('lang');
    var moreText = lang === 'ru' ? 'Подробнее' : 'More';
	$(this).text(moreText);
});