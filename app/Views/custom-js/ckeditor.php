<script>
    // * CKEditor
    DecoupledDocumentEditor
        .create(document.querySelector('#ckeditor-container'), {
            placeholder: 'Type something here...',
            toolbar: {
                items: [
                    'heading', '|',
                    'fontSize', 'fontBackgroundColor', 'fontColor', '|',
                    'bold', 'italic', 'underline', 'strikethrough', 'subscript', 'superscript', '|',
                    'alignment', '|',
                    'numberedList', 'bulletedList', 'todoList', '|',
                    'outdent', 'indent', '|',
                    'link', 'blockQuote', 'insertTable', '|',
                    'code', 'codeBlock', 'htmlEmbed', '|',
                    'undo', 'redo', 'removeFormat', 'findAndReplace'
                ],
                shouldNotGroupWhenFull: true,
            },
            language: 'en',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:inline',
                    'imageStyle:block',
                    'imageStyle:side',
                    'linkImage'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells',
                    'tableCellProperties',
                    'tableProperties',
                ]
            },
        })
        .then(editor => {
            window.editor = editor;

            const toolbarContainer = document.querySelector('#ckeditor-toolbar-container');
            editor.model.document.on('change:data', () => {
                const textArea = document.querySelector('textarea#event_body');
                textArea.value = editor.getData();
            });

            // console.log(Array.from( editor.ui.componentFactory.names() ));

            toolbarContainer.appendChild(editor.ui.view.toolbar.element);
        })
        .catch(error => {
            console.error(error);
        });
</script>