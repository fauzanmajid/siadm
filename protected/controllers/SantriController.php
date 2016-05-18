<?php

class SantriController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(	
			array('allow', // allow admin user to perform 'admin' and 'delete' actions

                'actions' => array('index','view','admin', 'delete', 'create', 'update','unduhDataSantri', 'excel', 'statistiksantri', 'statistikgender'),
                //'deniedCallback' => array($this,'gotoLogin'),             
                'expression' => function(UserWeb $user) {
                /* @var $user UserWeb */
                return $user->isAdmin();}
			),

			array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('riwayatPenyakit', 'perizinan', 'pelanggaran', 'prestasi'),
                'expression' => function(UserWeb $user) {
                /* @var $user UserWeb */
                return $user->isKesiswaan();}
			),
			array('deny',  // deny all users
				'users'=>array('*'),
				'deniedCallback' => function() { Yii::app()->controller->redirect(array ('/site/index')); }
			),
		);
	}

	public function gotoLogin()
	{
		$this->redirect('/site/index');

	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Santri;
		$modelwali=new Perwalian;
		$model->scenario = 'create';
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Santri']))
		{
			$model->attributes=$_POST['Santri'];
			$modelwali->attributes=$_POST['Perwalian'];
			$modelwali->nip_santri=$model->nip;
			/*
		
			$fileSource = Yii::getPathOfAlias('webroot').'/img/';
			$imgTem = CUploadedFile::getInstance($model,'foto_url');
			$imgTem->saveAs($fileSource.$imgTem);
			$model->foto_url = $imgTem;
			*/		
			if($model->validate() && $modelwali->validate() )
				{
				$model->save();
				$modelwali->save();
				$this->redirect(array('view','id'=>$model->nip));
				}
		}

		$this->render('create',array(
			'model'=>$model,
			'modelwali'=>$modelwali,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$model->scenario = 'update';
		$modelwali=Perwalian::model()->findByAttributes(array('nip_santri'=>$model->nip));
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Santri']))
		{
			 
			$model->attributes=$_POST['Santri'];
			$modelwali->attributes=$_POST['Perwalian'];
			$modelwali->nip_santri=$model->nip;
			
			
			if($model->validate() && $modelwali->validate() )
			{
				$model->save();
				$modelwali->save();
				$this->redirect(array('view','id'=>$model->nip));
			}
		}

		$this->render('update',array(
			'model'=>$model,
			'modelwali'=>$modelwali,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		//$this->loadModel($id)->delete();
		$model=santri::model()->findByPk($id);
		$modelwali = Perwalian::model()->findByAttributes(array('nip_santri'=>$model->nip));
		$model->delete();
		$modelwali->delete();		

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Santri');

		$model=new Santri('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Santri']))
			$model->attributes=$_GET['Santri'];

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			'model'=>$model,


		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Santri('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Santri']))
			$model->attributes=$_GET['Santri'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Santri the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Santri::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Santri $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='santri-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionRiwayatPenyakit($id)
	{
		$this->render('riwayat-penyakit',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionPerizinan($id)
	{
		$this->render('perizinan',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionPelanggaran($id)
	{
		$this->render('pelanggaran',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionPrestasi($id)
	{
		$this->render('prestasi',array(
			'model'=>$this->loadModel($id),
		));
	}


    public function actionStatistikSantri()
	{
		
		$statistik = StatistikSantri::model()->findAll();
		$statistikGender = StatistikGender::model()->findAll();

		$this->render('statistiksantri',  array(
			'statistik'=> $statistik, 'statistikGender'=> $statistikGender, 
		));
	}


    public function actionStatistikGender()
	{
		
		$statistik = StatistikGender::model()->findAll();

		$this->render('statistikgender', array(
			'statistik'=> $statistik,
		));
	}



	public function actionUnduhDataSantri()
	{
		$model = new Santri;
		$model->scenario = 'unduh-data-santri';

		if(isset($_POST['Santri'])) {
		
			$tanggal_awal = $_POST['Santri']['tanggal_awal'];
			$tanggal_akhir = $_POST['Santri']['tanggal_akhir'];
			$jenjang = $_POST['Santri']['jenjang'];

			$this->redirect(Yii::app()->createUrl('santri/excel', array('awal' => $tanggal_awal, 'akhir' => $tanggal_akhir, 'jenjang' => $jenjang)));
		}

		$this->render('/unduh/unduh-data-santri',array(
			'model' => $model,
		));
	}



	public function actionExcel($awal = null, $akhir = null, $jenjang = null){
        
        //Some data

        $criteria = new CDbCriteria();
        if ($awal != null){
			$criteria->addCondition("timestamp >= :awal");
			$criteria->params = array(':awal' => $awal);	
		}

		if ($akhir != null){
			$criteria->addCondition("timestamp <= :akhir");	
			$criteria->params = array(':akhir' => $akhir);
		}
		
		if ($jenjang != null){
			$criteria->addCondition("jenjang = :jenjang");	
			$criteria->params = array(':jenjang' => $jenjang);
		}
		
		$models = Santri::model()->findAll($criteria);
		
		foreach($models as $model) {
		    $santri[$model->nip] = $model->attributes;
		}

        $report = new YiiReport(array('template'=> 'santri.xls'));
        
        $report->load(array(
                array(
                    'id' => 'judul',
                    'data' => array(
                        'name' => 'Data SANTRI POPNPES AL-LATHIFA MULIA'
                    )
                ),
                array(
                    'id'=>'kode',
                    'repeat'=>true,
                    'data'=>$santri,
                    'minRows'=>2
                ),
            )
        );
        
         echo $report->render('excel5', 'Students');
        // echo $report->render('excel2007', 'Students');
        // echo $report->render('pdf', 'daftar santri');
        
    }//actionExcel method end
}
