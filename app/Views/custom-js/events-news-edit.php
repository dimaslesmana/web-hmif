<script>
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginImageExifOrientation,
        FilePondPluginFileValidateSize,
        FilePondPluginFileValidateType
    );

    const eventPhotos = [];

    $('input:hidden[name="event_photo[]"]').each(function() {
        eventPhotos.push({
            source: `<?= base_url('assets/images/event-news'); ?>/${this.value}`,
            options: {
                type: 'local'
            }
        })
    });

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
            load: async (source, load, error, progress, abort, headers) => {
                try {
                    const response = await fetch(source);
                    const blobFile = await response.blob();

                    progress(true, 0, 1024);
                    load(blobFile);
                } catch (err) {
                    console.error(err);
                    error('Something went wrong!');
                }

                return {
                    abort: () => {
                        abort();
                    }
                }
            },
            remove: (source, load, error) => {
                const filename = source.split('/').pop();

                $.ajax({
                    url: `<?= base_url('dashboard/multiple-image-upload/delete'); ?>/${filename}`,
                    type: 'DELETE',
                    dataType: 'json',
                    success: function(data, status, xhr) {
                        $('input:hidden[value="' + filename + '"]').remove();
                    },
                    error: function(xhr, status, err) {
                        console.error(JSON.parse(xhr.responseText));
                        error('Something went wrong!');
                    }
                });

                load();
            },
        },
        files: eventPhotos,
    })
</script>