jQuery(document).ready(function(){


	jQuery(".start").click(function(){
		var _h=parseInt(jQuery(".h").val());
		var _m=parseInt(jQuery(".m").val());
		var _s=parseInt(jQuery(".s").val());

		jQuery(".rh").text(_h);
		jQuery(".rm").text(_m);
		jQuery(".rs").text(_s);

		const firstIn = setInterval(counter,500);
		function counter(){
			var _rh= parseInt(jQuery(".rh").text());
			var _rm= parseInt(jQuery(".rm").text());
			var _rs= parseInt(jQuery(".rs").text());

			_rs -= 1;
			if (_rs < 0) {
				_rs =9;
				_rm -= 1;
			}
			jQuery(".rs").text(_rs);
			jQuery(".rm").text(_rm);

		}
	});

});