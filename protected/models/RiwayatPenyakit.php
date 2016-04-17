<?php

/**
 * This is the model class for table "riwayat_penyakit".
 *
 * The followings are the available columns in table 'riwayat_penyakit':
 * @property integer $no_pencatatan
 * @property string $nip_santri
 * @property string $nama_penyakit
 * @property string $tanggal
 *
 * The followings are the available model relations:
 * @property Santri $nipSantri
 */
class RiwayatPenyakit extends CActiveRecord
{
	public $nama_lengkap;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'riwayat_penyakit';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nip_santri', 'required'),
			array('nip_santri', 'length', 'max'=>15),
			array('nama_penyakit', 'length', 'max'=>25),
			array('tanggal', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('no_pencatatan, nip_santri, nama_penyakit, tanggal, nama_lengkap', 'safe', 'on'=>'search'),
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
			'nipSantri' => array(self::BELONGS_TO, 'Santri', 'nip_santri'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'no_pencatatan' => 'No Pencatatan',
			'nip_santri' => 'Nip Santri',
			'nama_penyakit' => 'Nama Penyakit',
			'tanggal' => 'Tanggal',
			'nama_lengkap' => 'Nama Santri'
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

		$criteria->compare('no_pencatatan',$this->no_pencatatan);
		$criteria->compare('nip_santri',$this->nip_santri,true);
		$criteria->compare('nama_penyakit',$this->nama_penyakit,true);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('nipSantri.nama_lengkap',$this->nama_lengkap, true);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RiwayatPenyakit the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
