	
	<!--div id="loading">
		<div>精彩旅游图片加载中...</div>
	</div-->
		<div id="waterfall" data-url="/pin/popular">
			
		   <!--div class="pin">
				<a class="image" href="">
					<img width="192" src="http://qiugonglue.b0.upaiyun.com/ea5300bc017c9cfd78135d364a53d55a.jpg!medium"/>
				</a>
				<div class="desc">
					abc
				</div>
				<div class="source">
					<a href=""><img class="avatar" src="http://qiugonglue.b0.upaiyun.com/9b4e5641600f6c2d1abaf4d6436d65ab.jpg!xsmall" /></a>
					<a href="">cgeek</a>收藏与
				</div>
			</div-->
			 
<script type="text/template" id="item_tpl">
{{#data}}
			<div class="pin" >
				<a class="image" href="/pin/{{pin_id}}">
					<img width="192" src="{{image_url}}"/>
				</a>
				<div class="desc">
				{{desc}}
				</div>
				<div class="source">
					<a href="/pin/{{pin_id}}"><img class="avatar" src="http://tp3.sinaimg.cn/1640306342/50/1278671284/1" /></a>
					<a href="">cgeek</a>收藏与
				</div>
				<ul class="comments">
					<li>
						<a href=""><img class="avatar" src="http://tp3.sinaimg.cn/1640306342/50/1278671284/1" /></a>
						<a href="">cgeek</a>我是点评
					</li>
				</ul>
			</div>
{{/data}}		
</script>
		<div id="more-loading" style="visibility:hidden;">
			<p>加载中...</p>
		</div>
	
<script>
	seajs.use('/assets/js/router.js',function(router){
		router.load('waterfall');
	});
</script>
</body>
</html>
