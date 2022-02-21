function loadDataInit(root, loadData) {
    const rootEl = $(root);
    const prevEl = rootEl.find('.pagination__btns > button').first();
    const nextEl = rootEl.find('.pagination__btns > button').last();
    const paginationFirst = rootEl.find('.pagination__list a').first();
    const paginationLast = rootEl.find('.pagination__list a').last();
    const paginationProgress = rootEl.find('.pagination__progress');

    function setProgress(allPage, page) {
        const percent = (page-1) / (allPage-1) * 90 + 10;
        paginationProgress.css('--progress', Math.round(percent) + '%')
    }


    nextEl.on('click', function (event) {
        event.preventDefault();
        let page = parseInt($(this).attr('page'));
        const minuspage = prevEl.attr('page');
        prevEl.prop('disabled', false);
        const lastPage = parseInt(nextEl.attr('last-page'));
        loadData(page, lang);
        setProgress(lastPage, page);

        if (page == lastPage) {
            page = lastPage
            prevEl.attr('page', page - 1);
            $(this).prop('disabled', true);
            paginationLast.addClass('disabled');
            paginationFirst.removeClass('disabled');
            paginationFirst.text(page);
        } else {
            $(this).attr('page', +page + 1);
            prevEl.attr('page', page);
            paginationLast.removeClass('disabled');
            paginationFirst.addClass('disabled');
            paginationFirst.text(page);
        }
    })

    prevEl.on('click', function (event) {
        event.preventDefault();
        const page = parseInt($(this).attr('page'));
        const pluspage = $('#next_page').attr('page');
        nextEl.prop('disabled', false);
        const lastPage = parseInt(nextEl.attr('last-page'));
        loadData(page, lang);
        setProgress(lastPage, page);

        if (page === 1) {
            $(this).prop('disabled', true);
            paginationLast.removeClass('disabled');
            paginationFirst.addClass('disabled');
            paginationFirst.text(page);
        } else {
            $(this).attr('page', page - 1);
            nextEl.attr('page', page);
            paginationLast.addClass('disabled');
            paginationFirst.removeClass('disabled');
            paginationFirst.text(page);
        }
    })

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
    });
}
