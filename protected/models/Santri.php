<?php

/**
 * This is the model class for table "santri".
 *
 * The followings are the available columns in table 'santri':
 * @property string $nip
 * @property string $nis
 * @property string $nik
 * @property string $nisn
 * @property string $nama_lengkap
 * @property string $nama_kecil
 * @property string $status
 * @property string $alamat
 * @property string $jenjang
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $golongan_darah
 * @property integer $anak_ke
 * @property integer $jum_saudara
 * @property integer $Perwalian_nip_santri
 * @property string $Perwalian_status
 * @property string $Pemasukkan_santri_kode
 *
 * The followings are the available model relations:
 * @property MataPelajaran[] $mataPelajarans
 * @property PemasukkanSantri[] $pemasukkanSantris
 * @property PencatatanPelanggaran[] $pencatatanPelanggarans
 * @property PencatatanPerizinan[] $pencatatanPerizinans
 * @property Perwalian[] $perwalians
 * @property Prestasi[] $prestasis
 * @property RiwayatPenyakit[] $riwayatPenyakits
 */
class Santri extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'santri';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nip, nis, nik, nisn, nama_lengkap, nama_kecil, status, alamat, jenjang, tempat_lahir, tanggal_lahir, golongan_darah, anak_ke, Perwalian_nip_santri, Perwalian_status, Pemasukkan_santri_kode', 'required'),
			array('anak_ke, jum_saudara, Perwalian_nip_santri', 'numerical', 'integerOnly'=>true),
			array('nip, nis, nik, nisn, status, tempat_lahir', 'length', 'max'=>15),
			array('nama_lengkap', 'length', 'max'=>25),
			array('nama_kecil, Pemasukkan_santri_kode', 'length', 'max'=>10),
			array('alamat', 'length', 'max'=>50),
			array('jenjang, golongan_darah', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nip, nis, nik, nisn, nama_lengkap, nama_kecil, status, alamat, jenjang, tempat_lahir, tanggal_lahir, golongan_darah, anak_ke, jum_saudara, Perwalian_nip_santri, Perwalian_status, Pemasukkan_santri_kode', 'safe', 'on'=>'search'),
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
			'mataPelajarans' => array(self::MANY_MANY, 'MataPelajaran', 'enrollment_santri(nip_santri, id_matpel)'),
			'pemasukkanSantris' => array(self::HAS_MANY, 'PemasukkanSantri', 'nip_santri'),
			'pencatatanPelanggarans' => array(self::HAS_MANY, 'PencatatanPelanggaran', 'nip_santri'),
			'pencatatanPerizinans' => array(self::HAS_MANY, 'PencatatanPerizinan', 'nip_santri'),
			'perwalians' => array(self::HAS_MANY, 'Perwalian', 'nip_santri'),
			'prestasis' => array(self::HAS_MANY, 'Prestasi', 'nip_santri'),
			'riwayatPenyakits' => array(self::HAS_MANY, 'RiwayatPenyakit', 'nip_santri'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nip' => 'Nip',
			'nis' => 'Nis',
			'nik' => 'Nik',
			'nisn' => 'Nisn',
			'nama_lengkap' => 'Nama Lengkap',
			'nama_kecil' => 'Nama Kecil',
			'status' => 'Status',
			'alamat' => 'Alamat',
			'jenjang' => 'Jenjang',
			'tempat_lahir' => 'Tempat Lahir',
			'tanggal_lahir' => 'Tanggal Lahir',
			'golongan_darah' => 'Golongan Darah',
			'anak_ke' => 'Anak Ke',
			'jum_saudara' => 'Jum Saudara',
			'Perwalian_nip_santri' => 'Perwalian Nip Santri',
			'Perwalian_status' => 'Perwalian Status',
			'Pemasukkan_santri_kode' => 'Pemasukkan Santri Kode',
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

		$criteria->compare('nip',$this->nip,true);
		$criteria->compare('nis',$this->nis,true);
		$criteria->compare('nik',$this->nik,true);
		$criteria->compare('nisn',$this->nisn,true);
		$criteria->compare('nama_lengkap',$this->nama_lengkap,true);
		$criteria->compare('nama_kecil',$this->nama_kecil,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('jenjang',$this->jenjang,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('golongan_darah',$this->golongan_darah,true);
		$criteria->compare('anak_ke',$this->anak_ke);
		$criteria->compare('jum_saudara',$this->jum_saudara);
		$criteria->compare('Perwalian_nip_santri',$this->Perwalian_nip_santri);
		$criteria->compare('Perwalian_status',$this->Perwalian_status,true);
		$criteria->compare('Pemasukkan_santri_kode',$this->Pemasukkan_santri_kode,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Santri the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
