<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="description" content="(tuyou.me)">
	<meta name="keywords" content="">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/base.css"/>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/libs/seajs/1.1.0/sea.js"></script>
</head>
<body>
	<div id="header" class="section"> 
		<div id="logo">
			<a href="/"><img src="/images/logo.png" width="180" height"36" /></a>
		</div>
		<div class="header-nav">
			<div class="layout960 clearfix">
				<ul>

				</ul>
				<ul>

				</ul>
			</div>
		</div>
		<div id="menu">
			<ul class="items">
				<li class="home"><a href="/"><i></i>首页</a></li>
				<li class="calibration">
					<a href="/board/hot">目的地</a>
				</li>
				<li>
					<a data-action="showTools" href="#!/show_tools">+发现</a>
				</li>
				<li class="calibration">
					<a href="/help/marktool.action">关于<b></b></a>
					<ul>
						<li><a href="/help/faq.action">关于发现啦!</a></li>
						<li><a href="/help/marktool.action">发现工具</a></li>
						<li><a href="/mark/1663">问题反馈</a></li>
						<li><a href="/help/friends.action">友情链接</a></li>
					</ul>
				</li>
				<li>
					<a href="/14251"><img width="16" height="16" src="http://pic.yupoo.com/ucdchina_v/BwvhywhN/earth.jpg" class="user_16x16">cgeek<b></b></a>
					<ul>
						<li><a href="/14251/marks">我的发现</a></li>
						<li><a href="/14251">我的发现板</a></li>
						<li class="hr"><a href="/user/beLikedMarks.action">收到喜欢</a></li>
						<li><a href="/user/beCommentedMarks.action">收到评论</a></li>
						<li class="hr"><a href="/account/edit.action">账号设置</a></li>
						<li><a href="/user/doLogout.action">退出</a></li>
					</ul>
				</li>
			</ul>
			<form enctype="application/x-www-form-urlencoded" method="get" action="/search/marks.action">
				<input type="text" name="q">
				<button type="submit"><span>Search</span></button>
			</form>
		</div>
	</div>
	
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
