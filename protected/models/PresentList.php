<?php

/**
 * This is the model class for table "present_list".
 *
 * The followings are the available columns in table 'present_list':
 * @property integer $id
 * @property string $present
 * @property integer $user_id
 * @property string $out_link
 * @property integer $quantity
 * @property integer $flag
 *
 * The followings are the available model relations:
 * @property Users $user
 */
class PresentList extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'present_list';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, quantity, flag, event_id', 'numerical', 'integerOnly'=>true),
			array('present, out_link', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, present, user_id, out_link, quantity, flag, event_id', 'safe', 'on'=>'search'),
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
			'present' => 'Present',
			'user_id' => 'User',
			'out_link' => 'Out Link',
			'quantity' => 'Quantity',
			'flag' => 'Flag',
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
		$criteria->compare('present',$this->present,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('out_link',$this->out_link,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('flag',$this->flag);
                $criteria->compare('event_id',$this->event_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PresentList the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
