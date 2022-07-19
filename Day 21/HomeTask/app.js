jQuery(document).ready(function(){


	jQuery(".menu ul ul").parent("li").children("a").append(' <i class="fa fa-angle-down"></i>');

	jQuery(".menu > ul > li").mouseenter(function(){
		jQuery(this).children("ul").slideDown();
	});
	jQuery(".menu > ul > li").mouseleave(function(){
		jQuery(this).children("ul").slideUp();
	});
    jQuery(".menu > ul > li").click(function(){
		jQuery(this).children("ul").slideToggle();
	});

	var width = jQuery("body").width();

	if(width < 768){
		jQuery(".open").show(1000);
		jQuery(".close").hide(1000);
		jQuery(".menu").hide(1000);
	}
	else{
		jQuery(".open").hide(1000);
		jQuery(".close").hide(1000);
		jQuery(".menu").show(1000);
	}

	jQuery(".open").click(function(){
		jQuery(".open").hide(1000);
		jQuery(".close").show(1000);
		jQuery(".menu").show(1000);
	});
	jQuery(".close").click(function(){
		jQuery(".open").show(1000);
		jQuery(".close").hide(1000);
		jQuery(".menu").hide(1000);
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