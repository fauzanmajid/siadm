<?php

/**
 * This is the model class for table "pencatatan_pelanggaran".
 *
 * The followings are the available columns in table 'pencatatan_pelanggaran':
 * @property integer $id
 * @property integer $No_pelanggaran
 * @property string $nip_santri
 * @property integer $id_kesiswaan
 *
 * The followings are the available model relations:
 * @property User $idKesiswaan
 * @property Pelanggaran $noPelanggaran
 * @property Santri $nipSantri
 */
class alokasiKelas extends Base
{
	public $nama_kelas;
	public $nama_guru;
	public $nama_matpel;
	public $nama;
	public $role;
	
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alokasi_kelas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idkelas, idmatpel, idguru', 'required'),
			//array('id_kesiswaan', 'numerical', 'integerOnly'=>true),
			//array('nip_santri', 'length', 'max'=>15),
			//array('nip_santri', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idkelas, idmatpel, idguru', 'safe', 'on'=>'search'),
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
			'kelass' => array(self::BELONGS_TO, 'Kelas', 'id'),
			'matapelajarans' => array(self::BELONGS_TO, 'MataPelajaran', 'id'),
			'gurus' => array(self::BELONGS_TO, 'User', 'id'),
			'kombinasi' => array(self::HAS_MANY, 'Penilaian', array('idkelas','idmatpel','idguru')),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idkelas' => 'Kelas',
			'idmatpel' => 'Nama Mata Pelajaran',
			'idguru' => 'Nama Guru',		
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
		$criteria->with = array('gurus');
		
		
		$criteria->compare('idkelas',$this->idkelas);
		$criteria->compare('idmatpel',$this->idmatpel,true);
		$criteria->compare('idguru',$this->idguru);
		$criteria->compare('gurus.role',$this->role, true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PencatatanPelanggaran the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function beforeSave() {
	    if ($this->isNewRecord) {
	        //$this->id_kesiswaan = UserWeb::instance()->ID;
	    }
	 
	    return parent::beforeSave();
	}
}
