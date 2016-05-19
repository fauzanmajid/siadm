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
	public $cari_tanggal_awal;
	public $cari_tanggal_akhir;
	public $jml_absen;


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
			array('nip_santri, deskripsi, tanggal_awal, tanggal_akhir, kategori', 'required'),
			array('id_kesiswaan, durasi', 'numerical', 'integerOnly'=>true),
			array('nip_santri', 'length', 'max'=>15),
			array('deskripsi', 'length', 'max'=>25),
			array('kategori', 'length', 'max'=>10),
			array('id','unique','message'=>'{attribute}:{value} sudah ada!'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nama_lengkap, pencatatan_perizinan, nip_santri, id_kesiswaan, deskripsi, durasi, tanggal_awal, tanggal_akhir, kategori, cari_tanggal_awal, cari_tanggal_akhir, jml_absen', 'safe', 'on'=>'search'),
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
			'jml_absen' => 'Jumlah Sakit',
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

	public function beforeSave() {
		if(parent::beforeSave()){
			$this->id_kesiswaan = UserWeb::instance()->ID;
			$this->durasi = $this->getDuration();
			return true;
		}
		return false;
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
	public function searchIzin()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		//select sum(duration) from pencatatan_perizinan where kategori = :kategori AND tanggal_awal >= :tanggal_awal AND tanggal_akhir <= :tanggal_akhir
		$criteria=new CDbCriteria;
		$criteria->select = 'nip_santri, sum(durasi) as jml_absen, kategori';
        $criteria->with = array( 'nipSantri' );
        $criteria->group = 'nip_santri, kategori';

		$criteria->compare('nip_santri',$this->nip_santri,true);
		$criteria->compare('nipSantri.nama_lengkap',$this->nama_lengkap, true);
		$criteria->compare('tanggal_awal',$this->tanggal_awal,true);
		$criteria->compare('tanggal_akhir',$this->tanggal_akhir,true);

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

	public function getDuration(){
		
		$diff = strtotime($this->tanggal_akhir) - strtotime($this->tanggal_awal);
		$days = ($diff / 60 / 60 / 24) + 1;

		return $days;
	}

	public function getSakit(){
		$criteria=new CDbCriteria;
        
        $criteria->select = 'sum('.$this->durasi.') as jml_absen';
        $criteria->group = 'nip_santri';
        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));     
	}

	public function getUmum(){
		
	}
}
