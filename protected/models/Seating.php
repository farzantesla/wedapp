<?php

/**
 * This is the model class for table "seating".
 *
 * The followings are the available columns in table 'seating':
 * @property integer $id
 * @property integer $table_id
 * @property integer $user_id
 * @property integer $guest_id
 * @property string $date
 *
 * The followings are the available model relations:
 * @property Users $user
 * @property Guests $guest
 * @property Tables $table
 */
class Seating extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'seating';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('table_id, user_id, guest_id, event_id', 'numerical', 'integerOnly'=>true),
			array('date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, table_id, user_id, guest_id, date, event_id', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
			'guest' => array(self::BELONGS_TO, 'Guests', 'guest_id'),
			'table' => array(self::BELONGS_TO, 'Tables', 'table_id'),
                        'event' => array(self::BELONGS_TO, 'Events', 'event_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'table_id' => 'Table',
			'user_id' => 'User',
			'guest_id' => 'Guest',
			'date' => 'Date',
                    //    'event_id' => 'Event',
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
		$criteria->compare('table_id',$this->table_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('guest_id',$this->guest_id);
		$criteria->compare('date',$this->date,true);
                  $criteria->compare('event_id',$this->event_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Seating the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
