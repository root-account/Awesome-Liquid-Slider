jQuery(document).ready(function(){


	jQuery(".scene-nav--next").on("click", function(e){

		if (jQuery('.item.active').is(':last-child')) {

			jQuery(".item:last-child").removeClass("active");
			jQuery(".item:first-child").addClass("active");

			return false;
		}

		jQuery(".item.active").next().addClass("active");
		jQuery(".item.active").prev().removeClass("active");

	});

	jQuery(".scene-nav--prev").on("click", function(){

		if (jQuery('.item.active').is(':first-child')) {

			jQuery(".item:first-child").removeClass("active");
			jQuery(".item:last-child").addClass("active");

			return false;
		}

		jQuery(".item.active").prev().addClass("active");
		jQuery(".item.active").next().removeClass("active");


	});




setInterval(function(){

	jQuery(".scene-nav--next").trigger('click')

}, 7000);


});
