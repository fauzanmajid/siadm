<?php

/**
 * This is the model class for table "enrollment_santri".
 *
 * The followings are the available columns in table 'enrollment_santri':
 * @property integer $id
 * @property string $nip_santri
 * @property integer $id_matpel
 * @property integer $nilai_harian
 * @property integer $nilai_uts
 * @property integer $nilai_uas
 * @property integer $nilai_akhir
 *
 * The followings are the available model relations:
 * @property MataPelajaran $idMatpel
 * @property Santri $nipSantri
 */
class EnrollmentSantri extends Base
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'enrollment_santri';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nip_santri, id_matpel, nilai_harian, nilai_uts, nilai_uas, nilai_akhir', 'required'),
			array('id_matpel, nilai_harian, nilai_uts, nilai_uas, nilai_akhir', 'numerical', 'integerOnly'=>true),
			array('nip_santri', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nip_santri, id_matpel, nilai_harian, nilai_uts, nilai_uas, nilai_akhir', 'safe', 'on'=>'search'),
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
			'idMatpel' => array(self::BELONGS_TO, 'MataPelajaran', 'id_matpel'),
			'nipSantri' => array(self::BELONGS_TO, 'Santri', 'nip_santri'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nip_santri' => 'Nip Santri',
			'id_matpel' => 'Id Matpel',
			'nilai_harian' => 'Nilai Harian',
			'nilai_uts' => 'Nilai Uts',
			'nilai_uas' => 'Nilai Uas',
			'nilai_akhir' => 'Nilai Akhir',
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
		$criteria->compare('nip_santri',$this->nip_santri,true);
		$criteria->compare('id_matpel',$this->id_matpel);
		$criteria->compare('nilai_harian',$this->nilai_harian);
		$criteria->compare('nilai_uts',$this->nilai_uts);
		$criteria->compare('nilai_uas',$this->nilai_uas);
		$criteria->compare('nilai_akhir',$this->nilai_akhir);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EnrollmentSantri the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
