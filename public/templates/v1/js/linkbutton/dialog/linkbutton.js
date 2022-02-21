CKEDITOR.dialog.add( 'linkbutton', function( editor ) {
    return {
        title: 'Параметры кнопки',
        contents: [
            {
                id: 'params',
                elements: [
                    {
                        id: 'link',
                        type: 'text',
                        label: 'Ссылка',
                        link: 'http://example.com',
                        setup: function( widget ) {
                            this.setValue( widget.data.link );
                        },
                        commit: function( widget ) {
                            widget.setData( 'link', this.getValue() );
                        }
                    },
                    {
                        id: 'color',
                        type: 'text',
                        label: 'Цвет кнопки',
                        link: 'red',
                        setup: function( widget ) {
                            this.setValue( widget.data.color );
                        },
                        commit: function( widget ) {
                            widget.setData( 'color', this.getValue() );
                        }
                    }
                ]
            }
        ]
    };
} );