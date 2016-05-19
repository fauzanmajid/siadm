<?php

/**
 * This is the model class for table "pemasukkan_donatur".
 *
 * The followings are the available columns in table 'pemasukkan_donatur':
 * @property integer $kode
 * @property integer $id_bendahara
 * @property integer $nominal
 * @property string $timestamp
 * @property integer $id_donatur
 *
 * The followings are the available model relations:
 * @property Donatur $idDonatur
 * @property User $idBendahara
 */
class PemasukkanDonatur extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pemasukkan_donatur';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
<<<<<<< HEAD
<<<<<<< HEAD
			array('nominal, timestamp, id_donatur', 'required'),
			array('id_bendahara, nominal, id_donatur', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kode, id_bendahara, nominal, timestamp, id_donatur', 'safe', 'on'=>'search'),
=======
=======
>>>>>>> master
			array('nominal, id_donatur, tanggal', 'required'),
			array('id_bendahara, nominal, id_donatur, tanggal, keterangan', 'numerical', 'integerOnly'=>true),
=======
			array('nominal, id_donatur, tanggal, keterangan', 'required'),
			array('id_bendahara, nominal, id_donatur', 'numerical', 'integerOnly'=>true),
>>>>>>> f5cfa5377e90676ea0786fe8dfe6ae4e173e19d5
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kode, id_bendahara, nominal, tanggal, keterangan, timestamp, id_donatur', 'safe', 'on'=>'search'),
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> master
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
			'idDonatur' => array(self::BELONGS_TO, 'Donatur', 'id_donatur'),
			'idBendahara' => array(self::BELONGS_TO, 'User', 'id_bendahara'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode' => 'Kode',
			'id_bendahara' => 'Id Bendahara',
			'nominal' => 'Nominal',
<<<<<<< HEAD
<<<<<<< HEAD
=======
			'tanggal' => 'Tanggal',
			'keterangan' => 'Keterangan',
>>>>>>> master
=======
			'tanggal' => 'Tanggal',
			'keterangan' => 'Keterangan',
>>>>>>> master
			'timestamp' => 'Timestamp',
			'id_donatur' => 'Id Donatur',
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

		$criteria->compare('kode',$this->kode);
		$criteria->compare('id_bendahara',$this->id_bendahara);
		$criteria->compare('nominal',$this->nominal);
<<<<<<< HEAD
<<<<<<< HEAD
=======
		$criteria->compare('tanggal',$this->tanggal);
		$criteria->compare('keterangan',$this->keterangan);
>>>>>>> master
=======
		$criteria->compare('tanggal',$this->tanggal);
		$criteria->compare('keterangan',$this->keterangan);
>>>>>>> master
		$criteria->compare('timestamp',$this->timestamp,true);
		$criteria->compare('id_donatur',$this->id_donatur);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PemasukkanDonatur the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> master

	public function beforeSave ()
	{
		if(parent::beforeSave()){
			if($this->isNewRecord){
				$this->timestamp=date('Y-m-d H:i:s');
				$this->id_bendahara = UserWeb::instance()->ID;
			}
			return true;
		}
		return false;

	}
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> master
}
