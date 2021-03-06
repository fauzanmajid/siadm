<?php

class TransaksiPengeluaranController extends Controller
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('index','view','admin', 'delete', 'create', 'update', 'statistikpengeluaran', 'unduhtransaksipengeluaran'),
                'expression' => function(UserWeb $user) {
                /* @var $user UserWeb */
                return $user->isBendahara();}
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('statistikpengeluaran', 'unduhtransaksipengeluaran'),
                'expression' => function(UserWeb $user) {
                /* @var $user UserWeb */
                return $user->isDewanPembina();}
			),
			array('deny',  // deny all users
				'users'=>array('*'),
				'deniedCallback' => function() { Yii::app()->controller->redirect(array ('/site/index')); }
			),
		);
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
		$model=new TransaksiPengeluaran;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TransaksiPengeluaran']))
		{
			$model->attributes=$_POST['TransaksiPengeluaran'];
			if($model->save())
				$this->redirect(array('index'));
		}

		$this->render('create',array(
			'model'=>$model,
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TransaksiPengeluaran']))
		{
			$model->attributes=$_POST['TransaksiPengeluaran'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->kode));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}


	

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('TransaksiPengeluaran');
		$model=new TransaksiPengeluaran('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TransaksiPengeluaran']))
			$model->attributes=$_GET['TransaksiPengeluaran'];

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			'model'=>$model,
		));
	}

	  public function actionStatistikPengeluaran()
	{
		
		$statistik = StatistikPengeluaran::model()->findAll();

		$this->render('/transaksiPengeluaran/statistikpengeluaran', array(
			'statistik'=> $statistik,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TransaksiPengeluaran('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TransaksiPengeluaran']))
			$model->attributes=$_GET['TransaksiPengeluaran'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return TransaksiPengeluaran the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=TransaksiPengeluaran::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function actionUnduhTransaksiPengeluaran()
	{
		/*$model = new TransaksiPengeluaran;
		$model->scenario = 'unduh-laporan-keuangan';

		if(isset($_POST['TransaksiPengeluaran'])) {
		
			$tanggal_awal = $_POST['Santri']['tanggal_awal'];
			$tanggal_akhir = $_POST['Santri']['tanggal_akhir'];
			$jenjang = $_POST['Santri']['jenjang'];

			$this->redirect(Yii::app()->createUrl('santri/excel', array('awal' => $tanggal_awal, 'akhir' => $tanggal_akhir, 'jenjang' => $jenjang)));
		}
*/
		$this->render('/unduh/unduh-laporan-keuangan',array(
			
		));
	}

	/*public function actionExcel($awal = null, $akhir = null, $jenjang = null){
        
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
        
    }*///actionExcel method end

	/**
	 * Performs the AJAX validation.
	 * @param TransaksiPengeluaran $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='transaksi-pengeluaran-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
