<?php

class UnduhController extends Controller
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

                'actions' => array('unduhtransaksipengeluaran', 'excelpengeluaran', 'excelPemasukkan'),
                //'deniedCallback' => array($this,'gotoLogin'),             
                'expression' => function(UserWeb $user) {
                /* @var $user UserWeb */
                return $user->isBendahara();}
			),

			
			array('deny',  // deny all users
				'users'=>array('*'),
				'deniedCallback' => function() { Yii::app()->controller->redirect(array ('/site/index')); }
			),
		);
	}

	
	public function actionUnduhTransaksiPengeluaran()
	{
		$model = new TransaksiPengeluaran;
		$model->scenario = 'unduh-laporan-keuangan';

		if(isset($_POST['TransaksiPengeluaran'])) {
		
			$tanggal_awal = $_POST['TransaksiPengeluaran']['tanggal_awal'];
			$tanggal_akhir = $_POST['TransaksiPengeluaran']['tanggal_akhir'];
			$jenis = $_POST['TransaksiPengeluaran']['jenis'];
			if($jenis= "Pengeluaran"){
			$this->redirect(Yii::app()->createUrl('unduh/excelPengeluaran', array('awal' => $tanggal_awal, 'akhir' => $tanggal_akhir)));
			}
			if ($jenis= "Pemasukan"){
			$this->redirect(Yii::app()->createUrl('unduh/excelPemasukkan', array('awal' => $tanggal_awal, 'akhir' => $tanggal_akhir)));

			}
		}

		$this->render('/unduh/unduh-laporan-keuangan',array(
			'model' => $model,
		));
	}



	public function actionExcelPemasukkan($awal = null, $akhir = null){
        
        //Some data

        $criteria = new CDbCriteria();
        if ($awal != null){
			$criteria->compare('Tanggal','>='.$awal);	
		}

		if ($akhir != null){
			$criteria->compare('Tanggal','<='.$akhir);
		}
		
		$models = LaporanPemasukkan::model()->findAll($criteria);
		
		$transaksi = [];
		foreach($models as $model) {
		    $transaksi[$model->Kode] = $model->attributes;
		}

        $report = new YiiReport(array('template'=> 'pemasukkan.xls'));
        
        $report->load(array(
                array(
                    'id' => 'judul',
                    'data' => array(
                        'name' => 'LAPORAN PEMASUKKAN SANTRI POPNPES AL-LATHIFA MULIA'
                    )
                ),
                array(
                    'id'=>'kode',
                    'repeat'=>true,
                    'data'=>$transaksi,
                    'minRows'=>2
                ),
            )
        );
        
         echo $report->render('excel5', 'LaporanPemasukkan');
        // echo $report->render('excel2007', 'Students');
        // echo $report->render('pdf', 'daftar santri');
        
    }//actionExcel method end


  
    public function actionExcelPengeluaran($awal = null, $akhir = null){
        //Some data

        $criteria = new CDbCriteria();
        if ($awal != null){
			$criteria->compare('tanggal_pengeluaran','>='.$awal);	
		}

		if ($akhir != null){
			$criteria->compare('tanggal_pengeluaran','<='.$akhir);
		}
		
		$models = TransaksiPengeluaran::model()->findAll($criteria);
		
		$transaksi = [];
		foreach($models as $model) {
		    $transaksi[$model->kode] = $model->attributes;
		}

        $report = new YiiReport(array('template'=> 'pengeluaran.xls'));
        
        $report->load(array(
                array(
                    'id' => 'judul',
                    'data' => array(
                        'name' => 'LAPORAN PENGELUARAN SANTRI POPNPES AL-LATHIFA MULIA'
                    )
                ),
                array(
                    'id'=>'kode',
                    'repeat'=>true,
                    'data'=>$transaksi,
                    'minRows'=>2
                ),
            )
        );
        
         echo $report->render('excel5', 'LaporanPengeluaran');
        // echo $report->render('excel2007', 'Students');
        // echo $report->render('pdf', 'daftar santri');
        
    }
}

