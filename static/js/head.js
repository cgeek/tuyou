define(function(require, exports, module){
	var $ = require('jquery'),
		hoverClass = 'hover';
	$.browser.msie && (parseInt($.browser.version, 10) ==6)&& $('#hd').find('.fixed-hover').hover(
		function(){
			$(this).addClass(hoverClass);
		},
		function(){
			$(this).removeClass(hoverClass);
		}
	);

	$('img').hover(function(){
		//alert('aa');
		$("#set-1").show();
		$("#set-1").hover(function(){
			$(this).show();
		},function(){
			$(this).hide();
		});
	},function(){
		if($(this).data('menu')) {
			console.log('this');
		}
		$("#set-1").hide();
	});
	$("#set-1").click(function(){
		alert('a');
	});
});
