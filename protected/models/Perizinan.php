<?php

/**
 * This is the model class for table "Perizinan".
 *
 * The followings are the available columns in table 'Perizinan':
 * @property integer $no_izin
 * @property string $deskripsi
 * @property integer $durasi
 * @property string $tanggal_awal
 * @property string $tanggal_akhir
 * @property string $kategori
 *
 * The followings are the available model relations:
 * @property PencatatanPerizinan[] $pencatatanPerizinans
 */
class Perizinan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Perizinan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('no_izin, deskripsi, durasi, tanggal_awal, tanggal_akhir, kategori', 'required'),
			array('no_izin, durasi', 'numerical', 'integerOnly'=>true),
			array('deskripsi', 'length', 'max'=>25),
			array('kategori', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('no_izin, deskripsi, durasi, tanggal_awal, tanggal_akhir, kategori', 'safe', 'on'=>'search'),
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
			'pencatatanPerizinans' => array(self::HAS_MANY, 'PencatatanPerizinan', 'no_izin'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'no_izin' => 'No Izin',
			'deskripsi' => 'Deskripsi',
			'durasi' => 'Durasi',
			'tanggal_awal' => 'Tanggal Awal',
			'tanggal_akhir' => 'Tanggal Akhir',
			'kategori' => 'Kategori',
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

		$criteria->compare('no_izin',$this->no_izin);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('durasi',$this->durasi);
		$criteria->compare('tanggal_awal',$this->tanggal_awal,true);
		$criteria->compare('tanggal_akhir',$this->tanggal_akhir,true);
		$criteria->compare('kategori',$this->kategori,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Perizinan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
