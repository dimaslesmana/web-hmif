<script>
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginImageExifOrientation,
        FilePondPluginFileValidateSize,
        FilePondPluginFileValidateType
    );

    const filepondImageUpload = FilePond.create(document.querySelector('input[type="file"].filepond'));
    filepondImageUpload.setOptions({
        maxFileSize: '3MB',
        acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
        server: {
            process: {
                url: '<?= base_url('dashboard/multiple-image-upload/upload'); ?>',
                method: 'POST',
                onload: (response) => {
                    const filename = JSON.parse(response).uploaded_filename;

                    $('<input>', {
                        type: 'hidden',
                        name: 'event_photo[]',
                        value: filename,
                    }).appendTo('form');

                    return filename;
                },
            },
            revert: (uniqueFileId, load, error) => {
                $.ajax({
                    url: `<?= base_url('dashboard/multiple-image-upload/delete'); ?>/${uniqueFileId}`,
                    type: 'DELETE',
                    dataType: 'json',
                    success: function(data, status, xhr) {
                        $('input:hidden[value="' + uniqueFileId + '"]').remove();
                    },
                    error: function(xhr, status, err) {
                        console.error(JSON.parse(xhr.responseText));
                        error('Something went wrong!');
                    }
                });

                load();
            },
        },
    })
</script>