<?php

/**
 * This is the model class for table "place".
 *
 * The followings are the available columns in table 'place':
 * @property integer $place_id
 * @property integer $parent_id
 * @property string $place_name
 * @property string $place_name_en
 * @property string $place_name_pinyin
 * @property string $place_name_tree
 * @property string $intro
 * @property string $type
 * @property string $source
 * @property string $cover_image
 * @property string $lat
 * @property string $lon
 * @property integer $ctime
 * @property string $mtime
 * @property integer $status
 */
class Place extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Place the static model class
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
		return 'place';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('place_id, parent_id, place_name, place_name_en, place_name_pinyin, place_name_tree, intro, type, source, cover_image, lat, lon, ctime, mtime, status', 'required'),
			array('place_id, parent_id, ctime, status', 'numerical', 'integerOnly'=>true),
			array('place_name, place_name_en, place_name_pinyin, place_name_tree', 'length', 'max'=>255),
			array('type, source', 'length', 'max'=>64),
			array('cover_image', 'length', 'max'=>32),
			array('lat, lon', 'length', 'max'=>16),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('place_id, parent_id, place_name, place_name_en, place_name_pinyin, place_name_tree, intro, type, source, cover_image, lat, lon, ctime, mtime, status', 'safe', 'on'=>'search'),
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
			'place_id' => 'Place',
			'parent_id' => 'Parent',
			'place_name' => 'Place Name',
			'place_name_en' => 'Place Name En',
			'place_name_pinyin' => 'Place Name Pinyin',
			'place_name_tree' => 'Place Name Tree',
			'intro' => 'Intro',
			'type' => 'Type',
			'source' => 'Source',
			'cover_image' => 'Cover Image',
			'lat' => 'Lat',
			'lon' => 'Lon',
			'ctime' => 'Ctime',
			'mtime' => 'Mtime',
			'status' => 'Status',
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

		$criteria->compare('place_id',$this->place_id);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('place_name',$this->place_name,true);
		$criteria->compare('place_name_en',$this->place_name_en,true);
		$criteria->compare('place_name_pinyin',$this->place_name_pinyin,true);
		$criteria->compare('place_name_tree',$this->place_name_tree,true);
		$criteria->compare('intro',$this->intro,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('source',$this->source,true);
		$criteria->compare('cover_image',$this->cover_image,true);
		$criteria->compare('lat',$this->lat,true);
		$criteria->compare('lon',$this->lon,true);
		$criteria->compare('ctime',$this->ctime);
		$criteria->compare('mtime',$this->mtime,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}