<?php

/**
 * This is the model class for table "pencatatan_perizinan".
 *
 * The followings are the available columns in table 'pencatatan_perizinan':
 * @property integer $pencatatan_perizinan
 * @property string $nip_santri
 * @property integer $id_kesiswaan
 * @property string $deskripsi
 * @property integer $durasi
 * @property string $tanggal_awal
 * @property string $tanggal_akhir
 * @property string $kategori
 *
 * The followings are the available model relations:
 * @property User $idKesiswaan
 * @property Santri $nipSantri
 */
class PencatatanPerizinan extends CActiveRecord
{
	public $nama_lengkap;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pencatatan_perizinan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nip_santri, id_kesiswaan, deskripsi, durasi, tanggal_awal, tanggal_akhir, kategori', 'required'),
			array('id_kesiswaan, durasi', 'numerical', 'integerOnly'=>true),
			array('nip_santri', 'length', 'max'=>15),
			array('deskripsi', 'length', 'max'=>25),
			array('kategori', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nama_lengkap, pencatatan_perizinan, nip_santri, id_kesiswaan, deskripsi, durasi, tanggal_awal, tanggal_akhir, kategori', 'safe', 'on'=>'search'),
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
			'idKesiswaan' => array(self::BELONGS_TO, 'User', 'id_kesiswaan'),
			'nipSantri' => array(self::BELONGS_TO, 'Santri', 'nip_santri'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pencatatan_perizinan' => 'Pencatatan Perizinan',
			'nip_santri' => 'Nip Santri',
			'id_kesiswaan' => 'Id Kesiswaan',
			'deskripsi' => 'Deskripsi',
			'durasi' => 'Durasi',
			'tanggal_awal' => 'Tanggal Awal',
			'tanggal_akhir' => 'Tanggal Akhir',
			'kategori' => 'Kategori',
			'nama_lengkap' => 'Nama Santri',
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
		$criteria->with = array( 'nipSantri' );
		
		$criteria->compare('pencatatan_perizinan',$this->pencatatan_perizinan);
		$criteria->compare('nip_santri',$this->nip_santri,true);
		$criteria->compare('id_kesiswaan',$this->id_kesiswaan);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('durasi',$this->durasi);
		$criteria->compare('tanggal_awal',$this->tanggal_awal,true);
		$criteria->compare('tanggal_akhir',$this->tanggal_akhir,true);
		$criteria->compare('kategori',$this->kategori,true);
		$criteria->compare('nipSantri.nama_lengkap',$this->nama_lengkap, true);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
	        'attributes'=>array(
	            'nama_lengkap'=>array(
	                'asc'=>'nipSantri.nama_lengkap',
	                'desc'=>'nipSantri.nama_lengkap DESC',
	            ),
	            '*',
	        ),
	    ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PencatatanPerizinan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}