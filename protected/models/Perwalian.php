<?php

/**
 * This is the model class for table "perwalian".
 *
 * The followings are the available columns in table 'perwalian':
 * @property integer $id
 * @property string $nip_santri
 * @property string $status
 * @property string $nama
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $agama
 * @property string $alamat
 * @property string $no_telepon
 * @property string $pekerjaan
 * @property string $pendidikan
 * @property integer $penghasilan
 *
 * The followings are the available model relations:
 * @property Santri $nipSantri
 */
class Perwalian extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'perwalian';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nip_santri, status, nama, tempat_lahir, tanggal_lahir, agama, alamat, no_telepon, pekerjaan, pendidikan, penghasilan', 'required'),
			array('penghasilan', 'numerical', 'integerOnly'=>true),
			array('nip_santri, status, tempat_lahir, no_telepon, pekerjaan, pendidikan', 'length', 'max'=>15),
			array('nama', 'length', 'max'=>25),
			array('agama', 'length', 'max'=>10),
			array('alamat', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nip_santri, status, nama, tempat_lahir, tanggal_lahir, agama, alamat, no_telepon, pekerjaan, pendidikan, penghasilan', 'safe', 'on'=>'search'),
			array('nama', 'match','pattern' => '/^[a-zA-Z\s]+$/'),
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
			'id' => 'ID',
			'nip_santri' => 'Nip Santri',
			'status' => 'Status',
			'nama' => 'Nama',
			'tempat_lahir' => 'Tempat Lahir',
			'tanggal_lahir' => 'Tanggal Lahir',
			'agama' => 'Agama',
			'alamat' => 'Alamat',
			'no_telepon' => 'No Telepon',
			'pekerjaan' => 'Pekerjaan',
			'pendidikan' => 'Pendidikan',
			'penghasilan' => 'Penghasilan',
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
		$criteria->compare('status',$this->status,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('agama',$this->agama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('no_telepon',$this->no_telepon,true);
		$criteria->compare('pekerjaan',$this->pekerjaan,true);
		$criteria->compare('pendidikan',$this->pendidikan,true);
		$criteria->compare('penghasilan',$this->penghasilan);
		//$criteria->compare('status',$this->status,true);
		$criteria->compare('nama',$this->nama,true);
		//$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		//$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		//$criteria->compare('agama',$this->agama,true);
		//$criteria->compare('alamat',$this->alamat,true);
		//$criteria->compare('no_telepon',$this->no_telepon,true);
		//$criteria->compare('pekerjaan',$this->pekerjaan,true);
		//$criteria->compare('pendidikan',$this->pendidikan,true);
		//$criteria->compare('penghasilan',$this->penghasilan);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Perwalian the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
