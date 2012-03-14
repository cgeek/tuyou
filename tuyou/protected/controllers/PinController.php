<?php

class PinController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionView()
	{

		$pin_id =  $_GET['id'];
		
		$pin = Pin::model()->find("pin_id=:pin_id",array(":pin_id"=>$pin_id));
		$data['pin'] = $pin;

		$place = Place::model()->find("place_id=:place_id",array(":place_id"=>$pin->place_id));
		$data['place'] = $place;

		$poi = Poi::model()->find("poi_id=:poi_id",array(":poi_id"=>$pin->poi_id));
		$data['poi'] = $poi;

		$this->render('view',$data);
	}

	public function actionPopular()
	{

		$data = Pin::model()->findAll();
		foreach($data as $pin)
		{
			$pin_list[] = array(
							'pin_id'=>$pin->pin_id,
							'image_url'=>$pin->images,
							'title'=> $pin->title,
							'desc'=>$pin->desc
						);
		}

		$result = array();
		$result['success'] = true;
		$result['message'] = "";
		$result['count'] = 20;
		$result['data'] = $pin_list;
		echo json_encode($result);
		
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
