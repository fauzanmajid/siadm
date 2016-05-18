<?php

/**
 * This is the model class for table "transaksi_pengeluaran".
 *
 * The followings are the available columns in table 'transaksi_pengeluaran':
 * @property integer $kode
 * @property integer $id_bendahara
 * @property integer $nominal
 * @property string $Deskripsi
 * @property string $tanggal_pengeluaran
 * @property string $timestamp
 *
 * The followings are the available model relations:
 * @property User $idBendahara
 */
class TransaksiPengeluaran extends CActiveRecord
{
	public $tanggal_awal;
	public $tanggal_akhir;
	public $jenis;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaksi_pengeluaran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nominal, Deskripsi, tanggal_pengeluaran, ', 'required'),
			array('id_bendahara, nominal', 'numerical', 'integerOnly'=>true),
			array('Deskripsi', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kode, id_bendahara, nominal, Deskripsi, tanggal_pengeluaran, timestamp', 'safe', 'on'=>'search'),
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
			'Deskripsi' => 'Deskripsi',
			'tanggal_pengeluaran' => 'Tanggal Pengeluaran',
			'timestamp' => 'Timestamp',
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
		$criteria->compare('Deskripsi',$this->Deskripsi,true);
		$criteria->compare('tanggal_pengeluaran',$this->tanggal_pengeluaran,true);
		$criteria->compare('timestamp',$this->timestamp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TransaksiPengeluaran the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

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
}
