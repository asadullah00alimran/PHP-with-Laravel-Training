jQuery(document).ready(function(){

	jQuery("#home").click(function(){
		jQuery(".home").animate({left:'50%'},100).css({'opacity':'1','transition':'.5s'});
		jQuery(".about").animate({left:'9%'},100).css({'opacity':'0','transition':'.5s'});
		jQuery(".service").animate({left:'9%'},100).css({'opacity':'0','transition':'.5s'});
		jQuery(".contact").animate({left:'9%'},100).css({'opacity':'0','transition':'.5s'});
		jQuery(".portfolio").animate({left:'9%'},100).css({'opacity':'0','transition':'.5s'});
	});

	jQuery("#about").click(function(){
		jQuery(".about").animate({left:'50%'},100).css({'opacity':'1','transition':'.5s'});
		jQuery(".home").animate({left:'9%'},100).css({'opacity':'0','transition':'.5s'});
		jQuery(".service").animate({left:'9%'},100).css({'opacity':'0','transition':'.5s'});
		jQuery(".contact").animate({left:'9%'},100).css({'opacity':'0','transition':'.5s'});
		jQuery(".portfolio").animate({left:'9%'},100).css({'opacity':'0','transition':'.5s'});
	});
	jQuery("#contact").click(function(){
		jQuery(".about").animate({left:'9%'},100).css({'opacity':'0','transition':'.5s'});
		jQuery(".home").animate({left:'9%'},100).css({'opacity':'0','transition':'.5s'});
		jQuery(".service").animate({left:'9%'},100).css({'opacity':'0','transition':'.5s'});
		jQuery(".contact").animate({left:'50%'},100).css({'opacity':'1','transition':'.5s'});
		jQuery(".portfolio").animate({left:'9%'},100).css({'opacity':'0','transition':'.5s'});
	});
	jQuery("#service").click(function(){
		jQuery(".about").animate({left:'9%'},100).css({'opacity':'0','transition':'.5s'});
		jQuery(".home").animate({left:'9%'},100).css({'opacity':'0','transition':'.5s'});
		jQuery(".service").animate({left:'50%'},100).css({'opacity':'1','transition':'.5s'});
		jQuery(".contact").animate({left:'9%'},100).css({'opacity':'0','transition':'.5s'});
		jQuery(".portfolio").animate({left:'9%'},100).css({'opacity':'0','transition':'.5s'});
	});
	jQuery("#portfolio").click(function(){
		jQuery(".about").animate({left:'9%'},100).css({'opacity':'0','transition':'.5s'});
		jQuery(".home").animate({left:'9%'},100).css({'opacity':'0','transition':'.5s'});
		jQuery(".service").animate({left:'9%'},100).css({'opacity':'0','transition':'.5s'});
		jQuery(".contact").animate({left:'9%'},100).css({'opacity':'0','transition':'.5s'});
		jQuery(".portfolio").animate({left:'50%'},100).css({'opacity':'1','transition':'.5s'});
	});

	jQuery("#mhome").click(function(){
		jQuery("html").animate({scrollTop:'630px'},500);
	});
	jQuery("#mabout").click(function(){
		jQuery("html").animate({scrollTop:'1410px'},500);
	});
	jQuery("#mcontact").click(function(){
		jQuery("html").animate({scrollTop:'2190px'},500);
	});
	jQuery("#mservice").click(function(){
		jQuery("html").animate({scrollTop:'2970px'},500);
	});
	jQuery("#mportfolio").click(function(){
		jQuery("html").animate({scrollTop:'3750px'},500);
	});
	jQuery(".top").click(function(){
		jQuery("html").animate({scrollTop:'0'},500);
	});

})