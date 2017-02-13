Dropzone.options.myAwesomeDropzone = false;
Dropzone.autoDiscover = false;
myDropzone = new Dropzone('.dropzone', {
    dictDefaultMessage: 'Seleccione la imagen que desea cargar.',
    dictMaxFilesExceeded: 'No se puede cargar más archivos.',
    headers: { 'X-CSRF-TOKEN': $('meta[name="token"]').attr('content') },
    maxFiles: 1,
    method: 'POST',
    url: '/admin/documentos/upload-imagen',
    success: function (file, result) {
        var archivo = result.archivo;
        var carpeta = result.carpeta;
        $('#upload_imagen').val(archivo);
        $('#upload_imagen_carpeta').val(carpeta);
    },
    errors: function (file) {
        alert('Se produjo un error. Intenten de nuevo refrescando la página.');
    }
});