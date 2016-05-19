<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		/*
		$error = Yii::app()->errorHandler->error;
		if($error)
			$this->render('error', array('error'=>$error));
		else
			throw new CHTTPException(404, 'Page not Found.');
		*/
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
		
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Treima kasih telah menghubungi kami. Kami akan merespon masukkann anda secepatnya.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		if (!UserWeb::instance()->isGuest){
			$this->redirect(array('index'));
		}

		$this->layout = 'login';
		$model=new LoginForm;

		// if it is ajax validation request
		/*if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}*/

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	public function actionExcel(){
        
        //Some data
        $models = Santri::model()->findAll();
		$students = array();
		
		foreach($models as $model) {
		    $students[$model->nip] = $model->attributes;
		}

        $report = new YiiReport(array('template'=> 'students.xls'));
        
        $report->load(array(
                array(
                    'id' => 'ong',
                    'data' => array(
                        'name' => 'Data SANTRI POPNPES AL-LATHIFA MULIA'
                    )
                ),
                array(
                    'id'=>'estu',
                    'repeat'=>true,
                    'data'=>$students,
                    'minRows'=>5
                )
            )
        );
        
         // echo $report->render('excel5', 'Students');
        // echo $report->render('excel2007', 'Students');
        echo $report->render('pdf', 'santri');
        
    }//actionExcel method end

    public function actionUnduhLaporanKeuangan()
	{
		$model = new TransaksiPengeluaran;
		$model->scenario = 'unduh-laporan-keuangan';

		if(isset($_POST['TransaksiPengeluaran'])) {
		
			$tanggal_awal = $_POST['TransaksiPengeluaran']['tanggal_awal'];
			$tanggal_akhir = $_POST['TransaksiPengeluaran']['tanggal_akhir'];
			$jenjang = $_POST['TransaksiPengeluaran']['jenis'];

			/*$this->redirect(Yii::app()->createUrl('santri/excel', array('awal' => $tanggal_awal, 'akhir' => $tanggal_akhir, 'jenjang' => $jenjang)));*/
		}

		$this->render('/unduh/unduh-laporan-keuangan',array(
			'model' => $model,
		));
	}
	 public function actionLog() {
        $this->layout = 'column1';
        $model = new Log('search');
        $model->unsetAttributes();  // clear any default values
        $criteria = new CDbCriteria();
        $criteria->order = 'ID ASC';
        $item_count = $model->count($criteria);
        $page_size = 10;
        $pages = new CPagination($item_count);
        $pages->setPageSize($page_size);
        $pages->applyLimit($criteria);
        // simulate the effect of LIMIT in a sql query
        if (isset($_GET['Log']))
            $model->attributes = $_GET['Log'];

        $this->render('Log', array(
            'model' => $model,
            'item_count' => $item_count,
            'page_size' => $page_size,
            'pages' => $pages,
            'criteria' => $criteria,
        ));
    }

	
}