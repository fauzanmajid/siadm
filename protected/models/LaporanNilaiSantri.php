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
class LaporanNilaiSantri extends Base
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'laporan_nilai_santri';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode, nip_santri', 'required'),
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
			'kode' => 'kode',
			'nip_santri' => 'nip_santri',
			'nama_lengkap' => 'nama_lengkap',
			'idmatpel' => 'idmatpel',
			'nama' => 'nama',
			'nilai_harian' => 'nilai_harian',
			'nilai_uts' => 'nilai_uts',
			'nilai_uas' => 'nilai_uas',
			'nilai_akhir' => 'nilai_akhir',

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
		$criteria->compare('kode',$this->kode,true);
		$criteria->compare('nip_santri',$this->nip_santri,true);
		$criteria->compare('nama_lengkap',$this->nama_lengkap,true);
		$criteria->compare('idmatpel',$this->idmatpel, true);
		$criteria->compare('nama',$this->nama, true);
		$criteria->compare('nilai_harian',$this->nilai_harian,true);
		$criteria->compare('nilai_uts',$this->nilai_uts,true);
		$criteria->compare('nilai_uas',$this->nilai_uas,true);
		$criteria->compare('nilai_akhir',$this->nilai_akhir,true);


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
