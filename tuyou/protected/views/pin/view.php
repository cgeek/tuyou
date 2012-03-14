<?php 
 Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/pin.css');
?>
<div id="container">
	<div id="main">
		<div id="detail">
			<!--div class="pinner">
				<a href="/15572">
					<img width="50px" height="50px" alt="林苏 merii" src="http://pic.yupoo.com/ucdchina_v/BDwLO9Om/water.jpg" class="avatar">
			    </a>
				<strong>
					<a href="/15572">林苏 merii</a><span>转自</span><a href="/10887">Aiko</a>
				</strong>
				<p>12年2月14日10:23</p>
			</div-->
			<!--div class="meta" id="view">
				<a class="btn btn_mini" data-action="remark" data-idx="-1" data-id="301822" href="#!/mark/remark.action?id=301822"><i class="i_remark"></i>转发</a>
				<a class="btn btn_mini" data-action="like" data-idx="-1" data-id="301822" href="#!/mark/like.jsn?id=301822"><i class="i_like "></i>喜欢</a>
			</div-->
			<div id="pin_image">
				<a target="_blank" href="<?=$pin->from_url;?>">
					<img alt="" src="<?=$pin->images;?>">
				</a>
				<a id="zoom" href="<?=$pin->from_url;?>" style="left: 113px; opacity: 0; width: 0px;">查看原图</a>
			    <ul id="image_gallery_data" style="display:none">
			    </ul>
			</div>
			<div class="meta">
				<?=$pin->desc;?>
			</div>
			<ol class="comments">
				<li>
					<a name="comment-7001"></a>
					<a href="/23">
						<img width="50px" height="50px" alt="yo-ko" src="http://storage.aliyun.com/avatar/water/23-buE78L.jpg" class="avatar">
					</a>
					<a class="user" href="/23">yo-ko</a>
					我喜欢所有高热量的食物，哇嘎嘎
				</li>
				<li class="post_comment">
					<form method="post" action="/mark/addComment.jsn">
						<input type="hidden" value="326206" name="id">
						<input type="hidden" value="detail" name="from">
						<img width="50px" height="50px" alt="cgeek" src="http://pic.yupoo.com/ucdchina_v/BwvhywhN/water.jpg" class="avatar">
						<textarea autocomplete="off" name="comment"></textarea>
						<button class="btn_small" type="submit">加上去</button>
					</form>
				</li>
			    <a name="last_comment"></a>
			</ol>
		</div>
	</div>
	<div id="side">
		<div class="box">
			<ul>
				<li><?=$poi['poi_name'];?></li>
				<li><?=$poi['address'];?></li>
				<li><?=$poi['place_name'];?></li>
				<li><?=$poi['phone'];?></li>
				<li><?=$poi['price'];?></li>
				<li><?=$poi['open_time'];?></li>
			</ul>
		</div>

		<div class="box">
			<p><?=$place['place_name_tree'];?></p>
			<p><?=$place['intro'];?></p>
		</div>
	</div>
</div>
<script>
	seajs.use('/assets/js/router.js',function(router){
	//	router.load('detail');
	});
</script>
