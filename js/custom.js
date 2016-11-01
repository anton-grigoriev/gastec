jQuery(document).ready(function(){
  
  //Rotates logos in reference section
  jQuery('.reference-logos').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: '<button type="button" class="btn hidden-xs hidden-sm reference-button-prev"> &larr; </button>',
    nextArrow: '<button type="button" class="btn hidden-xs hidden-sm reference-button-next"> &rarr; </button>'
  });
  
  //Initializes one page navigation
  jQuery('.my-nav-container').onePageNav({
			changeHash: false,
			scrollSpeed: 400,
			scrollThreshold: 0.1
		});
		
	jQuery('#href-tubes').on('click', function(){
    jQuery('#tubes').addClass('current-section');
    jQuery('section:not(#tubes)').removeClass('current-section');
  });
  
  jQuery('#href-apps').on('click', function(){
    jQuery('#apps').addClass('current-section');
  });
  
  jQuery('#href-home').on('click', function(){
    jQuery("#tubes, #apps, #contacts").removeClass('current-section');
  });
});