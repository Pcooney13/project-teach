jQuery( document ).ready(function($) {

    if (typeof postcount === 'undefined') {
      postcount = "0";
    }

    $('[data-postcount]').html(postcount);

});
