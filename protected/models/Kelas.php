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
class Kelas extends Base
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kelas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, jenjang', 'required'),
			//array('id', 'numerical', 'integerOnly'=>true),
			array('nama, jenjang', 'length', 'max'=>10),
			array('id','unique','message'=>'{attribute}:{value} sudah ada!'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama, jenjang', 'safe', 'on'=>'search'),
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
			'Kelas' => array(self::HAS_MANY, 'alokasiKelas', 'idkelas'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'id',
			'nama' => 'Nama',
			'jenjang' => 'Jenjang',
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
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('jenjang',$this->jenjang,true);

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
	public function getConcatened()
    {
	    return $this->jenjang.'-- ('.$this->nama.') ';
    }
}
