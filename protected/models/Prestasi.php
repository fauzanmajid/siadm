<?php

/**
 * This is the model class for table "prestasi".
 *
 * The followings are the available columns in table 'prestasi':
 * @property integer $no_pencatatan
 * @property string $deskripsi
 * @property string $jenis
 * @property string $tanggal
 * @property string $nip_santri
 *
 * The followings are the available model relations:
 * @property Santri $nipSantri
 */
class Prestasi extends Base
{
	public $id;
	public $nama_lengkap;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'prestasi';
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
			array('deskripsi', 'required'),
			array('deskripsi', 'length', 'max'=>50),
			array('jenis', 'length', 'max'=>25),
			array('jenis', 'required'),
			array('nip_santri', 'length', 'max'=>15),
			array('tanggal', 'safe'),
			array('tanggal', 'required'),
			array('no_pencatatan','unique','message'=>'{attribute}:{value} sudah ada!'),	
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('no_pencatatan, deskripsi, jenis, tanggal, nip_santri', 'safe', 'on'=>'search'),
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

			'nama_lengkap' => "Nama Santri",
			'no_pencatatan' => 'No Pencatatan',
			'deskripsi' => 'Deskripsi',
			'jenis' => 'Jenis',
			'tanggal' => 'Tanggal',
			'nip_santri' => 'NIP',
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
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('jenis',$this->jenis,true);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('nip_santri',$this->nip_santri,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Prestasi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
