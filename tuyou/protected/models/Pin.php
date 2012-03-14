<?php

/**
 * This is the model class for table "pin".
 *
 * The followings are the available columns in table 'pin':
 * @property integer $pin_id
 * @property integer $type
 * @property integer $user_id
 * @property string $title
 * @property integer $place_id
 * @property integer $poi_id
 * @property string $images
 * @property string $desc
 * @property string $from_url
 * @property string $ctime
 */
class Pin extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type, user_id, title, place_id, poi_id, images, desc, from_url, ctime', 'required'),
			array('type, user_id, place_id, poi_id', 'numerical', 'integerOnly'=>true),
			array('title, images, from_url', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pin_id, type, user_id, title, place_id, poi_id, images, desc, from_url, ctime', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pin_id' => 'Pin',
			'type' => 'Type',
			'user_id' => 'User',
			'title' => 'Title',
			'place_id' => 'Place',
			'poi_id' => 'Poi',
			'images' => 'Images',
			'desc' => 'Desc',
			'from_url' => 'From Url',
			'ctime' => 'Ctime',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('pin_id',$this->pin_id);
		$criteria->compare('type',$this->type);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('place_id',$this->place_id);
		$criteria->compare('poi_id',$this->poi_id);
		$criteria->compare('images',$this->images,true);
		$criteria->compare('desc',$this->desc,true);
		$criteria->compare('from_url',$this->from_url,true);
		$criteria->compare('ctime',$this->ctime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}