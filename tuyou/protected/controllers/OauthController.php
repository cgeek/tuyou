<?php

class OauthController extends Controller
{
	private $client = NULL;

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionSinaCallback()
	{
		Yii::import('ext.oauth.*');
		$sina = new sina();
		$url = Yii::app()->createAbsoluteUrl('oauth/sinaCallback');
		
		$token = $sina->getToken($_REQUEST['code'],$url);
		
		if($token) {
			$this->client = $sina->getClient($token);
		} else {

		}
		
		$sina_user_id = $this->client->get_uid();
		$sina_user = $this->client->show_user_by_id($sina_user_id['uid']);

		var_dump($sina_user);
	}
	
	public function actionSina()
	{
		Yii::import('ext.oauth.*');
		$url = Yii::app()->createAbsoluteUrl('oauth/sinaCallback');
		$sina = new sina();
		$this->redirect($sina->getUrl($url));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
