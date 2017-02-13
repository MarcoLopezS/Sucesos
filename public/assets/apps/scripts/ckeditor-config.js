CKEDITOR.plugins.addExternal('embed', '/assets/global/plugins/ckeditor/plugins/embed/', 'plugin.js');
CKEDITOR.plugins.addExternal('embedbase', '/assets/global/plugins/ckeditor/plugins/embedbase/', 'plugin.js');
CKEDITOR.plugins.addExternal('notificationaggregator', '/assets/global/plugins/ckeditor/plugins/notificationaggregator/', 'plugin.js');
CKEDITOR.plugins.addExternal('widget', '/assets/global/plugins/ckeditor/plugins/widget/', 'plugin.js');
CKEDITOR.plugins.addExternal('notification', '/assets/global/plugins/ckeditor/plugins/notification/', 'plugin.js');
CKEDITOR.plugins.addExternal('lineutils', '/assets/global/plugins/ckeditor/plugins/lineutils/', 'plugin.js');
CKEDITOR.plugins.addExternal('widgetselection', '/assets/global/plugins/ckeditor/plugins/widgetselection/', 'plugin.js');

CKEDITOR.editorConfig = function( config ) {
    config.language = 'es';

    config.filebrowserBrowseUrl = '/assets/global/plugins/kcfinder/browse.php?type=files';
    config.filebrowserImageBrowseUrl = '/assets/global/plugins/kcfinder/browse.php?type=images';
    config.filebrowserFlashBrowseUrl = '/assets/global/plugins/kcfinder/browse.php?type=flash';
    config.filebrowserUploadUrl = '/assets/global/plugins/kcfinder/upload.php?type=files';
    config.filebrowserImageUploadUrl = '/assets/global/plugins/kcfinder/upload.php?type=images';
    config.filebrowserFlashUploadUrl = '/assets/global/plugins/kcfinder/upload.php?type=flash';

    config.toolbar = [
        { name: 'clipboard', items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
        { name: 'editing', items: [ 'Find', 'Replace', '-', 'SelectAll' ] },
        { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
        { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
        { name: 'links', items: [ 'Link', 'Unlink' ] },
        { name: 'insert', items: [ 'Image', 'Embed', 'Table', 'HorizontalRule' ] },
        { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
        { name: 'tools', items: [ 'Maximize' ] },
        { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] }
    ];

    config.extraPlugins = 'embed';
};