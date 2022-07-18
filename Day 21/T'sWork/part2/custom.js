jQuery(document).ready(function(){


	jQuery(".menu ul ul").parent("li").children("a").append(' <i class="fa fa-angle-down"></i>');

	jQuery(".menu > ul > li").mouseenter(function(){
		jQuery(this).children("ul").slideDown();
	});
	jQuery(".menu > ul > li").mouseleave(function(){
		jQuery(this).children("ul").slideUp();
	});

	var width = jQuery("body").width();

	if(width < 768){
		jQuery(".open").show();
		jQuery(".close").hide();
		jQuery(".menu").hide();
	}
	else{
		jQuery(".open").hide();
		jQuery(".close").hide();
		jQuery(".menu").show();
	}

	jQuery(".open").click(function(){
		jQuery(".open").hide();
		jQuery(".close").show();
		jQuery(".menu").show();
	});
	jQuery(".close").click(function(){
		jQuery(".open").show();
		jQuery(".close").hide();
		jQuery(".menu").hide();
	});

	jQuery(window).scroll(function(){
		var top =jQuery(window).scrollTop();
		if (top > 121) {
			jQuery("nav").addClass("fixed");
			jQuery(".top").fadeIn();
		}
		else{
			jQuery("nav").removeClass("fixed");
			jQuery(".top").fadeOut();
		}
	});

	jQuery(".top").click(function(){
		jQuery("html").animate({scrollTop:'0'});
	});

});