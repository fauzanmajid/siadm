<?php

/**
 * This is the model class for table "kelas".
 *
 * The followings are the available columns in table 'kelas':
 * @property integer $id
 * @property string $nama
 * @property string $jenjang
 *
 * The followings are the available model relations:
 * @property EnrollmentPelajaran[] $enrollmentPelajarans
 */
class LaporanPemasukkan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'laporan_pemasukan_final';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Kode', 'required'),
			array('Tanggal', 'required'),
			array('nominal', 'integerOnly'=>true),
			array('Keterangan'),
			array('SUMBER'),
			
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
			'Kode' => 'Kode',
			'Tanggal' => 'Tanggal',
			'nominal' => 'nominal',
			'Keterangan' => 'Keterangan',
			'SUMBER' => 'SUMBER',

		);
	}

	/**
,
	 * Retrieves a list of models based on the current search/filter conditions.
	 * Retrieves a list of models ,
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
		$criteria->compare('Kode',$this->Kode,true);
		$criteria->compare('Tanggal',$this->Tanggal,true);
		$criteria->compare('nominal',$this->nominal,true);
		$criteria->compare('Keterangan',$this->Keterangan,true);
		$criteria->compare('SUMBER',$this->SUMBER,true);


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kelas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	
    
}
