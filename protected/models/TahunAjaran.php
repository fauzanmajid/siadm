<?php

/**
 * This is the model class for table "tahun_ajaran".
 *
 * The followings are the available columns in table 'tahun_ajaran':
 * @property integer $id
 * @property string $tahun_ajaran
 * @property integer $id_matpel
 *
 * The followings are the available model relations:
 * @property MataPelajaran $idMatpel
 */
class TahunAjaran extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tahun_ajaran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, tahun_ajaran, id_matpel', 'required'),
			array('id, id_matpel', 'numerical', 'integerOnly'=>true),
			array('tahun_ajaran', 'length', 'max'=>10),
			array('id','unique','message'=>'{attribute}:{value} sudah ada!'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, tahun_ajaran, id_matpel', 'safe', 'on'=>'search'),
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
			'idMatpel' => array(self::BELONGS_TO, 'MataPelajaran', 'id_matpel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tahun_ajaran' => 'Tahun Ajaran',
			'id_matpel' => 'Id Matpel',
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
		$criteria->compare('tahun_ajaran',$this->tahun_ajaran,true);
		$criteria->compare('id_matpel',$this->id_matpel);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TahunAjaran the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
