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
class Penilaian extends CActiveRecord
{
	public $nama_lengkap;
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'penilaian';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nip_santri, idkelas, idmatpel,idguru,nilai_harian,nilai_uts,nilai_uas,nilai_akhir', 'required'),
			//array('id_kesiswaan', 'numerical', 'integerOnly'=>true),
			//array('nip_santri', 'length', 'max'=>15),
			//array('nip_santri', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nip_santri, idkelas, idmatpel,idguru', 'safe', 'on'=>'search'),
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
			'idkelas,idmatpel,idguru' => array(self::BELONGS_TO, 'alokasi_kelas', 'idkelas,idmatpel,idguru'),
			//'nipSantri' => array(self::BELONGS_TO, 'Santri', 'nip_santri'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nip_santri' => 'NIP Santri',
			'idkelas' => 'Kelas',
			'idmatpel' => 'Mata Pelajaran',
			'idguru' => 'Guru',
			'nilai_harian' => 'Nilai Harian',
			'nilai_uts' => 'Nilai UTS',
			'nilai_uas' => 'Nilai UAS',
			'nilai_akhir' => 'Nilai Akhir',
				
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
		$criteria->compare('nip_santri',$this->nip_santri,true);
		$criteria->compare('idkelas',$this->idkelas);
		$criteria->compare('idmatpel',$this->idmatpel);
		$criteria->compare('idguru',$this->idguru);

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
/*
	public function beforeSave() {
	    if ($this->isNewRecord) {
	        $this->id_kesiswaan = UserWeb::instance()->ID;
	    }
	 
	    return parent::beforeSave();
	}
*/
}
