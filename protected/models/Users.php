<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $facebook_id
 * @property string $hasgtag
 * @property string $date
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Aboutus[] $aboutuses
 * @property Events[] $events
 * @property FoodMenu[] $foodMenus
 * @property Guests[] $guests
 * @property PresentList[] $presentLists
 * @property Seating[] $seatings
 * @property Uploads[] $uploads
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status', 'numerical', 'integerOnly'=>true),
			array('name, email, password, facebook_id, hasgtag', 'length', 'max'=>200),
			array('date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, email, password, facebook_id, hasgtag, date, status', 'safe', 'on'=>'search'),
		);
	}

        
         public function Getstatus($data)
        {
            if($data==0)
                return 'De-Active';
            else 
                return 'Active';
        }

  public function Getlevel($data)
        {
            if($data==0)
                return 'Subscriber';
            else 
                return 'Admin';
        }
        
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'aboutuses' => array(self::HAS_MANY, 'Aboutus', 'user_id'),
			'events' => array(self::HAS_MANY, 'Events', 'user_id'),
			'foodMenus' => array(self::HAS_MANY, 'FoodMenu', 'user_id'),
			'guests' => array(self::HAS_MANY, 'Guests', 'user_id'),
			'presentLists' => array(self::HAS_MANY, 'PresentList', 'user_id'),
			'seatings' => array(self::HAS_MANY, 'Seating', 'user_id'),
			'uploads' => array(self::HAS_MANY, 'Uploads', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'email' => 'Email',
			'password' => 'Password',
			'facebook_id' => 'Facebook',
			'hasgtag' => 'Hasgtag',
			'date' => 'Date',
			'status' => 'Status',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('facebook_id',$this->facebook_id,true);
		$criteria->compare('hasgtag',$this->hasgtag,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
