<?php

/**
 * This is the model class for table "poi".
 *
 * The followings are the available columns in table 'poi':
 * @property integer $poi_id
 * @property integer $place_id
 * @property string $place_name
 * @property string $poi_name
 * @property string $poi_name_en
 * @property string $phone
 * @property string $website
 * @property string $address
 * @property string $price
 * @property integer $rank
 * @property double $rating
 * @property string $grade
 * @property string $intro
 * @property string $type
 * @property string $tags
 * @property string $open_time
 * @property string $traffic
 * @property string $source
 * @property string $cover_image
 * @property string $lat
 * @property string $lon
 * @property integer $ctime
 * @property string $mtime
 * @property integer $status
 * @property integer $user_id
 * @property string $tmp_url
 * @property string $room_num
 * @property string $amenity
 */
class Poi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Poi the static model class
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
		return 'poi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('place_id, place_name, poi_name, poi_name_en, phone, website, address, price, rank, rating, grade, intro, type, tags, open_time, traffic, source, cover_image, ctime, mtime, status, user_id, tmp_url, room_num, amenity', 'required'),
			array('place_id, rank, ctime, status, user_id', 'numerical', 'integerOnly'=>true),
			array('rating', 'numerical'),
			array('place_name, poi_name, poi_name_en, website, address, price, tags, open_time, traffic, tmp_url, amenity', 'length', 'max'=>255),
			array('phone, cover_image', 'length', 'max'=>32),
			array('grade, room_num', 'length', 'max'=>12),
			array('type, source', 'length', 'max'=>64),
			array('lat, lon', 'length', 'max'=>16),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('poi_id, place_id, place_name, poi_name, poi_name_en, phone, website, address, price, rank, rating, grade, intro, type, tags, open_time, traffic, source, cover_image, lat, lon, ctime, mtime, status, user_id, tmp_url, room_num, amenity', 'safe', 'on'=>'search'),
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
			'poi_id' => 'Poi',
			'place_id' => 'Place',
			'place_name' => 'Place Name',
			'poi_name' => 'Poi Name',
			'poi_name_en' => 'Poi Name En',
			'phone' => 'Phone',
			'website' => 'Website',
			'address' => 'Address',
			'price' => 'Price',
			'rank' => 'Rank',
			'rating' => 'Rating',
			'grade' => 'Grade',
			'intro' => 'Intro',
			'type' => 'Type',
			'tags' => 'Tags',
			'open_time' => 'Open Time',
			'traffic' => 'Traffic',
			'source' => 'Source',
			'cover_image' => 'Cover Image',
			'lat' => 'Lat',
			'lon' => 'Lon',
			'ctime' => 'Ctime',
			'mtime' => 'Mtime',
			'status' => 'Status',
			'user_id' => 'User',
			'tmp_url' => 'Tmp Url',
			'room_num' => 'Room Num',
			'amenity' => 'Amenity',
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

		$criteria->compare('poi_id',$this->poi_id);
		$criteria->compare('place_id',$this->place_id);
		$criteria->compare('place_name',$this->place_name,true);
		$criteria->compare('poi_name',$this->poi_name,true);
		$criteria->compare('poi_name_en',$this->poi_name_en,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('rank',$this->rank);
		$criteria->compare('rating',$this->rating);
		$criteria->compare('grade',$this->grade,true);
		$criteria->compare('intro',$this->intro,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('tags',$this->tags,true);
		$criteria->compare('open_time',$this->open_time,true);
		$criteria->compare('traffic',$this->traffic,true);
		$criteria->compare('source',$this->source,true);
		$criteria->compare('cover_image',$this->cover_image,true);
		$criteria->compare('lat',$this->lat,true);
		$criteria->compare('lon',$this->lon,true);
		$criteria->compare('ctime',$this->ctime);
		$criteria->compare('mtime',$this->mtime,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('tmp_url',$this->tmp_url,true);
		$criteria->compare('room_num',$this->room_num,true);
		$criteria->compare('amenity',$this->amenity,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}