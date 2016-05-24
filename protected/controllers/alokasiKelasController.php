<?php

class alokasiKelasController extends Controller
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
			
			/*
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),

			),

			*/
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
                //'deniedCallback'=> array($this,'gotoLogin'),
                'actions' => array('index','view','admin', 'delete', 'create', 'update'),
                'expression' => function(UserWeb $user) {
                /* @var $user UserWeb */
                return $user->isAdmin();}
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
	public function actionView($id,$id2,$id3)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id,$id2,$id3),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new alokasiKelas;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['alokasiKelas']))
		{
			$model->attributes=$_POST['alokasiKelas'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
	public function actionUpdate($id,$id2,$id3)
	{
		$model=$this->loadModel($id,$id2,$id3);
		/*
		if ($id!=null)
			$model->id = $id;
		*/
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['alokasiKelas']))
		{
			$model->attributes=$_POST['alokasiKelas'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id,'id2'=>$model->id2,'id3'=>$model->id3));
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
	public function actionDelete($id,$id2,$id3)
	{
		$this->loadModel($id,$id2,$id3)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new alokasiKelas('search');
		// $model->unsetAttributes();  // clear any default values

		$criteria = new CDbCriteria;
		$criteria->addCondition(':role LIKE Guru');
		$criteria->params = array(
		    ':role' => $model->role,
		);

		$dataProvider=new CActiveDataProvider('alokasiKelas', array(
			'criteria'=>$criteria));
		
		if(isset($_GET['alokasiKelas']))
			$model->attributes=$_GET['alokasiKelas'];

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
		$model=new PencatatanPelanggaran('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['alokasiKelas']))
			$model->attributes=$_GET['alokasiKelas'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PencatatanPelanggaran the loaded model
	 * @throws CHttpException
	 */
	/*
	public function loadModel($id)
	{
		$model=alokasiKelas::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	*/
	public function loadModel($id,$id2,$id3)
	{
		$model=alokasiKelas::model()->findByAttributes(array('idkelas'=>$id,'idmatpel'=>$id2,'idguru'=>$id3));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param PencatatanPelanggaran $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='alokasi-kelas-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
