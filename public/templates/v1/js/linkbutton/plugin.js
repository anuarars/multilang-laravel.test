CKEDITOR.plugins.add( 'linkbutton', {
    requires: 'widget',

    icons: 'linkbutton',

    init: function (editor) {

        CKEDITOR.dialog.add( 'linkbutton', '/js/linkbutton/dialog/linkbutton.js' );

        editor.widgets.add('linkbutton', {
            button: 'Создать кнопку-ссылку',
            dialog: 'linkbutton',

            template:
                '<div class="linkbutton">' +
                    '<div class="linkbutton-title">Текст на кнопке</div>' +
                '</div>',

            editables: {
                title: {
                    selector: '.linkbutton-title',
                    allowedContent: 'br strong em'
                },
            },

            upcast: function (element) {
                return element.name == 'div' && element.hasClass('linkbutton');
            },

            init: function() {
                this.data.color = 'red';
                this.data.align = 'left';
                this.data.link = 'http://example.com';
            },

            data: function() {
                this.element.setStyle( 'background-color', this.data.color );
                this.element.setAttribute('link', this.data.link)
            }
        });


    },
})

