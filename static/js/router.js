(function(){

	var alias = {
		'es5-safe': 'es5-safe/0.9.2/es5-safe',
		'json':'json/1.0.1/json',

		'jquery':'jquery/1.7.1/jquery',
		'mustache':'mustache/0.4.0/mustache',
		'underscore': 'underscore/1.2.1/underscore',

		'masonry':'masonry/2.1.0/masonry'
	};

	var map=[
		//[/^(.*\/js\/.*?)([^\/]*\.js)$/i, '$1__build/$2?t=20120301']
		//[/^(.*\/js\/.*?)([^\/]*\.js)$/i, '$1/$2?t=20120301']
	];

	/*
	if (seajs.debug) {
		for (var k in alias) {
			if(alias.hasOwnProperty(k)) {
				var p = alias[k];
				if (!/\.(?:css|js)$/.test(p)) {
					alias[k] += '-debug';
				}
			}
		}
		map = [];
	}
	*/
	seajs.config({
		alias:alias,
		preload:[
			Function.prototype.bind ? '' : 'es5-safe',
			this.Json ? '':'json'
		],
		map:map,
		base:'http://tuyou.me/static/libs/'
	});

})();

define(function(require, exports){
	exports.load = function(filename){
		filename.split(',').forEach(function(modName){
			require.async('./' + modName, function(mod){
				if(mod && mod.init){
					mod.init();
				}
			});
		});
	};

	require.async('./head');
});
