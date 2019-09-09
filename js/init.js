(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();
  	$('#textarea1').val('New Text');
  	$('#textarea1').trigger('autoresize');
    $('.slider').slider({
    	height: 600,
    	duration: 500,
    	interval: 2000
    }
    );


  }); // end of document ready
})(jQuery); // end of jQuery name space


