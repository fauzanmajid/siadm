<?php

/**
 * This is the model class for table "pemasukkan_santri".
 *
 * The followings are the available columns in table 'pemasukkan_santri':
 * @property integer $kode
 * @property integer $id_bendahara
 * @property string $nip_santri
 * @property integer $nominal
 * @property string $timestamp
 *
 * The followings are the available model relations:
 * @property Santri $nipSantri
 * @property User $idBendahara
 */
class PemasukkanSantri extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pemasukkan_santri';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_bendahara, nip_santri, nominal, timestamp', 'required'),
			array('id_bendahara, nominal', 'numerical', 'integerOnly'=>true),
			array('nip_santri', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kode, id_bendahara, nip_santri, nominal, timestamp', 'safe', 'on'=>'search'),
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
			'nip_santri' => 'Nip Santri',
			'nominal' => 'Nominal',
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
		$criteria->compare('nip_santri',$this->nip_santri,true);
		$criteria->compare('nominal',$this->nominal);
		$criteria->compare('timestamp',$this->timestamp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PemasukkanSantri the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}