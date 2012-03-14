/**
 *  tuyun_list
 *
 *  cgeek <cgeek.share@gmail.com>
 */
define(function(require, exports, module){
	var $ = require('jquery'),
		_ = require('underscore'),
		Mustache = require('mustache'),
		Canvas = require('./Canvas');

	this.Masonrylist = {};
	
	_.extend(this.Masonrylist, {
		init:function(){
			var _self = this;
			_.extend(self, Canvas);
			self.setup();
		}	
	});
	

	return this.Masonrylist;
});
