<?php

/**
 * This is the model class for table "kelas".
 *
 * The followings are the available columns in table 'kelas':
 * @property integer $id
 * @property string $nama
 * @property string $jenjang
 *
 * The followings are the available model relations:
 * @property EnrollmentPelajaran[] $enrollmentPelajarans
 */
class LaporanPengeluaran extends Base
{
	public $id;

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
			array('jenis_kelamin', 'required'),
			array('jumlah', 'integerOnly'=>true),
			
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
			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'jenis_kelamin' => 'jenis_kelamin',
			'jumlah' => 'jumlah'
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

		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('jumlah',$this->jumlah,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kelas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getJumlahInteger() {
        return intval($this->jumlah);
    }
    
}
