<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $user_id
 * @property string $email
 * @property string $password
 * @property string $screen_name
 * @property integer $province
 * @property integer $city
 * @property string $location
 * @property string $description
 * @property string $avatar
 * @property string $gender
 * @property string $source
 * @property string $ext_uid
 * @property string $ext_token
 * @property integer $ctime
 * @property string $last_login_time
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('password, screen_name, ext_uid, ext_token, ctime, last_login_time', 'required'),
			array('province, city, ctime', 'numerical', 'integerOnly'=>true),
			array('email', 'length', 'max'=>64),
			array('password, screen_name', 'length', 'max'=>32),
			array('location', 'length', 'max'=>120),
			array('description, avatar', 'length', 'max'=>255),
			array('gender', 'length', 'max'=>1),
			array('source', 'length', 'max'=>10),
			array('ext_uid', 'length', 'max'=>15),
			array('ext_token', 'length', 'max'=>40),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, email, password, screen_name, province, city, location, description, avatar, gender, source, ext_uid, ext_token, ctime, last_login_time', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'email' => 'Email',
			'password' => 'Password',
			'screen_name' => 'Screen Name',
			'province' => 'Province',
			'city' => 'City',
			'location' => 'Location',
			'description' => 'Description',
			'avatar' => 'Avatar',
			'gender' => 'Gender',
			'source' => 'Source',
			'ext_uid' => 'Ext Uid',
			'ext_token' => 'Ext Token',
			'ctime' => 'Ctime',
			'last_login_time' => 'Last Login Time',
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

		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('screen_name',$this->screen_name,true);
		$criteria->compare('province',$this->province);
		$criteria->compare('city',$this->city);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('avatar',$this->avatar,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('source',$this->source,true);
		$criteria->compare('ext_uid',$this->ext_uid,true);
		$criteria->compare('ext_token',$this->ext_token,true);
		$criteria->compare('ctime',$this->ctime);
		$criteria->compare('last_login_time',$this->last_login_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}