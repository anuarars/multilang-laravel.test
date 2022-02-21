@extends('layouts.app')

@section('meta_title', $page->meta_title ?: $page->title)
@section('meta_keywords', $page->meta_keywords)
@section('meta_description', $page->meta_description)

@section('body')
    <div class="container">
        @if (Auth::user())
            <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
            <script>
                tinymce.PluginManager.add('example', function(editor, url) {
                var openDialog = function () {
                    return editor.windowManager.open({
                    title: 'Добавить tooltip',
                    body: {
                        type: 'panel',
                        items: [
                            {
                                type: 'input',
                                name: 'title',
                                label: 'Title'
                            },
                            {
                                type: 'input',
                                name: 'description',
                                label: 'description'
                            }
                        ]
                    },
                    buttons: [
                        {
                        type: 'cancel',
                        text: 'Close'
                        },
                        {
                        type: 'submit',
                        text: 'Save',
                        primary: true
                        }
                    ],
                    onSubmit: function (api) {
                        var data = api.getData();
                        /* Insert content when the window form is submitted */
                        editor.insertContent('<span class="tooltip-wrap"><button type="button" class="tooltip-word btn-reset">'+data.title+'</button><span class="tooltip" role="dialog"> <button type="button" class="btn-reset tooltip__close"></button> <span class="tooltip__text">'+data.description+'</span> </span><span>');
                        api.close();
                    }
                    });
                };
                /* Add a button that opens a window */
                editor.ui.registry.addButton('example', {
                    text: 'Tooltip',
                    onAction: function () {
                    /* Open window */
                    openDialog();
                    }
                });
                /* Adds a menu item, which can then be included in any menu via the menu/menubar configuration */
                editor.ui.registry.addMenuItem('example', {
                    text: 'Example plugin',
                    onAction: function() {
                    /* Open window */
                    openDialog();
                    }
                });
                /* Return the metadata for the help plugin */
                return {
                    getMetadata: function () {
                        return  {
                            name: 'Example plugin',
                            url: 'http://exampleplugindocsurl.com'
                        };
                    }
                };
                });

                /*
                The following is an example of how to use the new plugin and the new
                toolbar button.
                */
                tinymce.init({
                selector: '#myeditablediv',
                language: 'ru',
                inline: true,
                plugins: [
                "advlist autolink lists link image charmap print anchor",
                "searchreplace visualblocks code fullscreen media example help",
                ],
                toolbar: 'example | help'
                });
            </script>
            <div id="myeditablediv" page-id="{{$page->id}}" lang="{{\Request::segment(1)}}">{!! $page->content !!}</div>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var id = $('#myeditablediv').attr('page-id');
            var content = $('#myeditablediv').html();
            var lang = $('#myeditablediv').attr('lang');

            $(window).click(function() {
                $.ajax({
                    url:'/admin/pages/update/ajax/' + id,
                    method:"POST",
                    data: {content: $('#myeditablediv').html(), id: id, lang: lang},
                    success: function(data){
                        console.log(data);
                    }
                });
            });

            $('#myeditablediv').click(function(event){
                event.stopPropagation();
            });
        </script>
        @else
            {!! $page->content !!}
        @endif
    </div>
@endsection