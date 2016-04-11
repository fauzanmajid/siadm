<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $role
 *
 * The followings are the available model relations:
 * @property EnrolllmentGuru[] $enrolllmentGurus
 * @property PemasukkanBos[] $pemasukkanBoses
 * @property PemasukkanDonatur[] $pemasukkanDonaturs
 * @property PemasukkanSantri[] $pemasukkanSantris
 * @property PencatatanPelanggaran[] $pencatatanPelanggarans
 * @property PencatatanPerizinan[] $pencatatanPerizinans
 * @property TransaksiPengeluaran[] $transaksiPengeluarans
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(

			array('username, password, role', 'required'),
			array('username, role', 'length', 'max'=>12),
			array('password', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, role', 'safe', 'on'=>'search'),
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

			'enrolllmentGurus' => array(self::HAS_MANY, 'EnrolllmentGuru', 'id_guru'),
			'pemasukkanBoses' => array(self::HAS_MANY, 'PemasukkanBos', 'id_bendahara'),
			'pemasukkanDonaturs' => array(self::HAS_MANY, 'PemasukkanDonatur', 'id_bendahara'),
			'pemasukkanSantris' => array(self::HAS_MANY, 'PemasukkanSantri', 'id_bendahara'),
			'pencatatanPelanggarans' => array(self::HAS_MANY, 'PencatatanPelanggaran', 'id_kesiswaan'),
			'pencatatanPerizinans' => array(self::HAS_MANY, 'PencatatanPerizinan', 'id_kesiswaan'),
			'transaksiPengeluarans' => array(self::HAS_MANY, 'TransaksiPengeluaran', 'id_bendahara'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'role' => 'Role',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('role',$this->role,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
