document.addEventListener('DOMContentLoaded', function () {
    jQuery(document).ready(function ($) {
        $('.add-gallery-images').on('click', function (e) {
            e.preventDefault();

            var frame = wp.media({
                title: 'Selecciona imágenes',
                multiple: true,
                library: { type: 'image' },
                button: { text: 'Usar imágenes seleccionadas' }
            });

            frame.on('select', function () {
                var selection = frame.state().get('selection');
                var wrapper = $('#instalaciones-gallery-wrapper ul');

                selection.map(function (attachment) {
                    attachment = attachment.toJSON();
                    var html = '<li><img src="' + attachment.sizes.thumbnail.url + '" />';
                    html += '<input type="hidden" name="instalaciones_gallery[]" value="' + attachment.id + '"></li>';
                    wrapper.append(html);
                });
            });

            frame.open();
        });
    });

});
