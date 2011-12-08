<?php

/**
 * This is the model class for table "patient".
 *
 * The followings are the available columns in table 'patient':
 * @property string $id
 * @property string $userId
 * @property string $hospital_number
 * @property string $pt_first_name
 * @property string $pt_last_name
 * @property string $pt_ethnicity
 * @property string $pt_dob
 * @property string $pt_age
 * @property string $pt_sex
 * @property string $pt_part_of_study
 * @property string $pt_study_name
 *
 * The followings are the available model relations:
 * @property User $user
 * @property Tubedataset[] $tubedatasets
 */
class Patient extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Patient the static model class
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
		return 'patient';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userId, hospital_number, pt_first_name, pt_last_name, pt_dob, pt_age, pt_study_name', 'required'),
			array('userId, pt_age', 'length', 'max'=>10),
			array('hospital_number', 'length', 'max'=>20),
			array('pt_first_name, pt_last_name', 'length', 'max'=>50),
			array('pt_ethnicity', 'length', 'max'=>26),
			array('pt_sex', 'length', 'max'=>6),
			array('pt_part_of_study', 'length', 'max'=>13),
			array('pt_study_name', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, userId, hospital_number, pt_first_name, pt_last_name, pt_ethnicity, pt_dob, pt_age, pt_sex, pt_part_of_study, pt_study_name', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'userId'),
			'tubedatasets' => array(self::HAS_MANY, 'dataset', 'patient_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'userId' => 'User',
			'hospital_number' => 'Hospital Number',
			'pt_first_name' => ' First Name',
			'pt_last_name' => 'Last Name',
			'pt_ethnicity' => 'Ethnicity',
			'pt_dob' => 'DOB',
			'pt_age' => 'Age',
			'pt_sex' => 'Sex',
			'pt_part_of_study' => 'Part Of Study',
			'pt_study_name' => 'Study Name',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('userId',$this->userId,true);
		$criteria->compare('hospital_number',$this->hospital_number,true);
		$criteria->compare('pt_first_name',$this->pt_first_name,true);
		$criteria->compare('pt_last_name',$this->pt_last_name,true);
		$criteria->compare('pt_ethnicity',$this->pt_ethnicity,true);
		$criteria->compare('pt_dob',$this->pt_dob,true);
		$criteria->compare('pt_age',$this->pt_age,true);
		$criteria->compare('pt_sex',$this->pt_sex,true);
		$criteria->compare('pt_part_of_study',$this->pt_part_of_study,true);
		$criteria->compare('pt_study_name',$this->pt_study_name,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
	
}