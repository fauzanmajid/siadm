<?php

/**
 * This is the model class for table "enrollment_pelajaran".
 *
 * The followings are the available columns in table 'enrollment_pelajaran':
 * @property integer $id
 * @property integer $id_kelas
 * @property integer $id_matpel
 *
 * The followings are the available model relations:
 * @property Kelas $idKelas
 * @property MataPelajaran $idMatpel
 */
class Enrollment_Pelajaran extends Base
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'enrollment_pelajaran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_kelas, id_matpel', 'required'),
			array('id_kelas, id_matpel', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_kelas, id_matpel', 'safe', 'on'=>'search'),
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
			'idKelas' => array(self::BELONGS_TO, 'Kelas', 'id_kelas'),
			'idMatpel' => array(self::BELONGS_TO, 'MataPelajaran', 'id_matpel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_kelas' => 'Id Kelas',
			'id_matpel' => 'Id Matpel',
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
		$criteria->compare('id_kelas',$this->id_kelas);
		$criteria->compare('id_matpel',$this->id_matpel);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Enrollment_Pelajaran the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
