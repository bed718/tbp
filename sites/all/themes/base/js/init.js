Drupal.behaviors.init = {
	attach: function (context, settings) {
		(function ($) {
 			
 			
			// MENU TWEAKS!!!
 			//===================================
 			$('.menu-toggle').click(function(){
				$('#header-container #menu').slideToggle(300);

				if($(window).width() < 700){
					$('html, body').animate({scrollTop : 0}, 800);
				}

				return false;
			});


 			// MASONRY!!!
 			//===================================
			// var masonry_container = $('.node-image-gallery .field-name-field-other-images');
			
			// masonry_container.imagesLoaded(function(){
			// 	masonry_container.masonry({
			// 	  itemSelector: '.field-item'
			// 	});
			// });


			// SKROLR!!!
 			//===================================
			// if($(window).width() > 500){
	 		//		var s = skrollr.init({
	 		// 		forceHeight: false,
	 		// 	});
	 		// }


	 		// BACK TO TOP
 			//===================================
			$('.back-to-top').click(function(event) {
				$('html, body').animate({scrollTop : 0}, 800);
				return false;
			});

		


		}(jQuery));
	}	
}


