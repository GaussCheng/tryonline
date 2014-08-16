<?php

/**
 * This is the model class for table "tryo_user_detail".
 *
 * The followings are the available columns in table 'tryo_user_detail':
 * @property integer $user_id
 * @property string $real_name
 * @property integer $sex
 * @property integer $age_id
 * @property string $phone
 * @property integer $work_id
 * @property integer $edu_id
 * @property integer $salary_id
 * @property integer $province_id
 * @property integer $city_id
 * @property string $addr
 * @property string $zip
 *
 * The followings are the available model relations:
 * @property User $user
 * @property Age $age
 * @property Work $work
 * @property Edu $edu
 * @property Salary $salary
 * @property Province $province
 * @property City $city
 */
class UserDetail extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tryo_user_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id', 'required'),
			array('user_id, sex, age_id, work_id, edu_id, salary_id, province_id, city_id', 'numerical', 'integerOnly'=>true),
			array('real_name', 'length', 'max'=>64),
			array('phone', 'length', 'max'=>20),
			array('addr', 'length', 'max'=>256),
			array('zip', 'length', 'max'=>16),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, real_name, sex, age_id, phone, work_id, edu_id, salary_id, province_id, city_id, addr, zip', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
			'age' => array(self::BELONGS_TO, 'Age', 'age_id'),
			'work' => array(self::BELONGS_TO, 'Work', 'work_id'),
			'edu' => array(self::BELONGS_TO, 'Edu', 'edu_id'),
			'salary' => array(self::BELONGS_TO, 'Salary', 'salary_id'),
			'province' => array(self::BELONGS_TO, 'Province', 'province_id'),
			'city' => array(self::BELONGS_TO, 'City', 'city_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'real_name' => 'Real Name',
			'sex' => 'Sex',
			'age_id' => 'Age',
			'phone' => 'Phone',
			'work_id' => 'Work',
			'edu_id' => 'Edu',
			'salary_id' => 'Salary',
			'province_id' => 'Province',
			'city_id' => 'City',
			'addr' => 'Addr',
			'zip' => 'Zip',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('real_name',$this->real_name,true);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('age_id',$this->age_id);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('work_id',$this->work_id);
		$criteria->compare('edu_id',$this->edu_id);
		$criteria->compare('salary_id',$this->salary_id);
		$criteria->compare('province_id',$this->province_id);
		$criteria->compare('city_id',$this->city_id);
		$criteria->compare('addr',$this->addr,true);
		$criteria->compare('zip',$this->zip,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserDetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
