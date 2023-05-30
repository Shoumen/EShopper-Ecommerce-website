//modal delete action code start
jQuery(document).ready(function(){
  jQuery(document).on("click", "#softDelete", function () {
     var deleteID = jQuery(this).data('id');
     jQuery(".modal_card #modal_id").val( deleteID );
  });
  jQuery(document).on("click", "#reStore", function () {
    var deleteID = jQuery(this).data('id');
    jQuery(".modal_card #modal_id").val( deleteID );
 });
 jQuery(document).on("click", "#delete", function () {
  var deleteID = jQuery(this).data('id');
  jQuery(".modal_card #modal_id").val( deleteID );
});
});

//image upload js code start
function previewFile() {
  var preview = document.querySelector('img.upload_image');
  var file    = document.querySelector('input[type=file]').files[0];
  var reader  = new FileReader();

  reader.onloadend = function () {
    preview.src = reader.result;
  }

  if (file) {
    reader.readAsDataURL(file);
  } else {
    preview.src = "http://placehold.it/200x200/&text=Image Preview";
  }
}
//logo Upload code start
function previewLogo() {
  var preview = document.querySelector('img.upload_logo');
  var file    = document.querySelector('#logo').files[0];
  var reader  = new FileReader();

  reader.onloadend = function () {
    preview.src = reader.result;
  }

  if (file) {
    reader.readAsDataURL(file);
  } else {
    preview.src = "http://placehold.it/200x200/&text=Image Preview";
  }
}
//Favicon Upload code start
function previewFavicon() {
  var preview = document.querySelector('img.upload_favicon');
  var file    = document.querySelector('#favicon').files[0];
  var reader  = new FileReader();

  reader.onloadend = function () {
    preview.src = reader.result;
  }

  if (file) {
    reader.readAsDataURL(file);
  } else {
    preview.src = "http://placehold.it/200x200/&text=Image Preview";
  }
}

//Favicon Upload code start
function previewFlogo() {
  var preview = document.querySelector('img.upload_flogo');
  var file    = document.querySelector('#flogo').files[0];
  var reader  = new FileReader();

  reader.onloadend = function () {
    preview.src = reader.result;
  }

  if (file) {
    reader.readAsDataURL(file);
  } else {
    preview.src = "http://placehold.it/200x200/&text=Image Preview";
  }
  
}
function previewcover() {
  var preview = document.querySelector('img.upload_logo');
  var file    = document.querySelector('#cover').files[0];
  var reader  = new FileReader();

  reader.onloadend = function () {
    preview.src = reader.result;
  }

  if (file) {
    reader.readAsDataURL(file);
  } else {
    preview.src = "http://placehold.it/200x200/&text=Image Preview";
  }
}
