/**
 *  tuyun_list
 *
 *  cgeek <cgeek.share@gmail.com>
 */
define(function(require, exports, module){
	var $ = require('jquery'),
		_ = require('underscore'),
		Mustache = require('mustache'),
		masonry = require('masonry');

	var timer = null;

	this.Canvas = {
		config: {
			container:$('#waterfall'),
			LIST_TPL:$('#item_tpl').html().replace(/[\n\t\r]/g,''),
			width:222,
			count:0,
			gutterWidth:10,
			pageNum:1,
			loadTimes:10,
			minCount:4,
			ajaxUrl: $('#waterfall').attr('data-url'),
			isFinish:false
		}
	};
	masonry($);
	
	_.extend(this.Canvas, {
		allPins:function(){
			var _self = this,
				config = _self.config,
				container = config.container;
			container.masonry('reload');
		},
		loadTime:function(){
			var _self = this,
				config = _self.config;

			if (config.pageNum > config.loadTimes) {
				_self.loadFinish('没有更多图片啦');
				return true;
			}
			return false;
		},
		loadFinish:function(tip) {
			$('#LoadingPins').remove();
			this.config.isFinish = true;
			$(window).unbind('scroll.loadData');
		},
		_checkHeight:function(){
			var _self = this,
				container = _self.config.container,
				min = container.height(),
				$W = $(window);

			st = $W.scrollTop() + $W.height() - container.offset().top;
			if (_self._loading || st < min) {
				return true;
			}

		},
		// load data appendto container
		loadData: function(isFirst) {
			var _self = this,
				tpl = _self.config.LIST_TPL,
				container = _self.config.container,
				pageNum = _self.config.pageNum,
				isLoading = _self.config.isloading;

			if((_self._checkHeight() || isLoading || _self.loadTime())  && !isFirst) return;
			
			_self.config.isloading = true;
				
			$.ajax({
				'url' : _self.config.ajaxUrl + '?p=' +pageNum,
				'type': 'get',
				'datatype':'html',
				'cache': false,
				complete: function(){
					_self.config.isloading = false;
				},
				error: function(){
					alert('对不起，服务器泡妞去了');
				},
				success: function(result){
					result = $.parseJSON(result);

					var newItems  = $(Mustache.to_html(tpl,result));
					//var newItems = 
					container.append(newItems).masonry('appended', newItems);
					_self.config.pageNum++;
					$('#loading-more').show();
					 _self.config.isloading = false;
				}
			});
			
		},
		setup:function(){
			var _self = this;
			var container = _self.config.container;
			
			_self.loadData(true);
			_self.allPins();

			container.imagesLoaded(function(){
				container.masonry({
					itemSelector: '.pin',
					columnWidth:222,
					gutterWidth:15
				});
			});

			$(window).on('scroll.loadData',function(){
				if (timer !== null) return;

				timer = setTimeout(function() {
					timer = null;
					_self.loadData();
				}, 300);
			});
		}
		
	});

	return this.Canvas;
});
