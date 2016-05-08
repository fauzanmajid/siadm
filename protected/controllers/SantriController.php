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
                'actions' => array('index','view','admin','delete','create','update'),
                'expression' => function(UserWeb $user){
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
		$model=new Santri;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Santri']))
		{
			$model->attributes=$_POST['Santri'];
			/*
		
			$fileSource = Yii::getPathOfAlias('webroot').'/img/';
			$imgTem = CUploadedFile::getInstance($model,'foto_url');
			$imgTem->saveAs($fileSource.$imgTem);
			$model->foto_url = $imgTem;
			*/		
			if($model->save())
				{
			


				$this->redirect(array('view','id'=>$model->nip));
				}
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

		if(isset($_POST['Santri']))
		{
			 
			$model->attributes=$_POST['Santri'];
			
			if($model->save())
			
				$this->redirect(array('view','id'=>$model->nip));
			
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
}
