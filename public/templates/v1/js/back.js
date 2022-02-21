$(document).ready(function () {
    $('.date-picker-single').daterangepicker({
        startDate: new Date(),
        endDate: new Date(),
        singleDatePicker: true,
        autoApply: true,
        locale: {
            format: 'DD.MM.YYYY'
        }
    });

    $('.nav-tabs').each(function () {
        $('a:first', $(this)).tab('show');
    });

});



$(document).ready(function () {
    $('.photo-chooser').each(function () {
        var val = $(this).find('input').val();
        if (val) {
            $(this).css('backgroundImage', "url('" + val + "')").addClass('filled');
        }
    });

    $(document).on('click', '.photo-chooser .add', function () {
        var id = this.parentNode.id;
        callFinder(function (el) {
            var chooser = $('#' + id),
                val = '/' + el[0].path.replace(/\\/g, '/');
            chooser.css('backgroundImage', "url('" + val + "')").addClass('filled');
            chooser.find('input').val(val);
        })
    });

    $(document).on('click', '.photo-chooser .remove', function () {
        var chooser = $(this).parent();
        chooser.css('backgroundImage', '').removeClass('filled');
        chooser.find('input').val('');
    });

});


$(document).ready(function () {
    $(document).on('click', '.add-speaker', function () {
        var html = $('#speaker-cell').html();
        $('.add-speaker').each(function () {
            var locale = $(this).data('locale'),
                num = $(this).parent().index();
            $(this).parent().before(html.replace(/#locale#/g, locale).replace(/#num#/g, num));
        })
    });
    $(document).on('click', '.remove-speaker', function () {
        var index = $(this).parents('.col-sm-4').index();

        $('#speakers .tab-pane').each(function () {
            $(this).find('.col-sm-4').eq(index).remove()
        })
    });
});


$(document).ready(function () {
    $(document).on('click', '#event-gallery .add-item', function () {
        var html = $('#gallery-item').html(),
            btn = $(this);
        callFinder(function (el) {
            $.each(el, function(i, f) {
                var val = '/' + f.path.replace(/\\/g, '/');
                btn.before(html.replace(/#val#/g, val));
            });
        })
    });

    $(document).on('click', '#event-gallery .remove', function () {
        $(this).parent().remove();
    });
});


function callFinder(callback) {
    $('<div id="elftemp" />').dialogelfinder({
        lang: 'ru',
        customData: {
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        url: '/elfinder/connector',
        width: 1140,
        height: '85%',
        commandsOptions: {
            getfile: {
                multiple: true,
                oncomplete: 'destroy'
            }
        },
        getFileCallback : callback
    });
}
