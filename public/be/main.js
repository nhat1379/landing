function imgUploadPreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $(input).parents('.upload-banner').find('.preview').html('<img src="' + e.target.result + '" class="upload-banner-preview" />');
        }

        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}

$(document).on('click', '.fileupload-exists', function() {
    let upload = $(this).parents('.fileupload');
    upload.find('.fileupload-preview img').attr('src', 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image');
    upload.find('input').val('');
});