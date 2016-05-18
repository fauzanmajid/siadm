<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">


	<div id="header">
		<div id="logo">
			<?= CHtml::image(Yii::app()->request->baseUrl . '/img/logo2.png', 'Logo'); ?> 
			<?php echo CHtml::encode(Yii::app()->name); ?> 
		</div>
	</div>
	<!-- header -->

	<div id="mainmenu">
		<div id="anakan2">		
	<!--Ini Role Area Ya! -->
		<?php


		echo 'Jabatan : ';
	    if (UserWeb::instance()->isAdmin()) {
	        echo 'Administrator';
	    }
	    elseif (UserWeb::instance()->isKurikulum()) {
	     	echo 'Kurikulum';
	    }
	    elseif (UserWeb::instance()->isGuru()) {
	      	echo 'Guru';
	    }
	    elseif (UserWeb::instance()->isKesiswaan()) {
	     	echo 'Kesiswaan';
	    }
	    elseif (UserWeb::instance()->isDewanPembina()) {
	     	echo 'Dewan Pembina';
	    } 
	    elseif (UserWeb::instance()->isBendahara()) {
	    	echo 'Bendahara';
	    }
	    else {
	        echo 'Pengguna';
    	}
    	?>
    <!-- End Of Role Area -->
		</div>	

		<div id="anakan">
		<?php $this->widget('zii.widgets.CMenu',array('items'=>array(
				array('label'=>'Keluar', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)),
			
		)); ?>

		</div>
	</div>
	<div id="begron">
	<div id="cssmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('encodeLabel'=>false,'label'=>'<img id="sizehome" src="'.Yii::app()->request->baseUrl.'/img/home.png" />', 'url'=>array('/site/index')),
				array('label'=>'Pengguna', 'url'=>array('/User'),'visible'=>UserWeb::instance()->isAdmin()),
				array('label'=>'Kelas', 'url'=>array('/Kelas'),
					'items'=>array(
					array('label'=>'Buat Kelas','url'=>array('/Kelas/create')),
					),
					'visible'=>UserWeb::instance()->isAdmin()),
				array('label'=>'Data Santri ', 'url'=>array('/Santri'), 	
						'items'=>array(
					  	array('label'=>'Buat Data Santri','url'=>array('/Santri/create')),
					  	array('label'=>'Atur Data Santri','url'=>array('/Santri/admin')),
					  	array('label'=>'Unduh Data Santri','url'=>array('/Santri/unduhDataSantri')),
						array('label'=>'Wali Santri','url'=>array('/perwalian/admin')),
				  	),

						'visible'=>UserWeb::instance()->isAdmin()),
				array('label'=>'Prestasi', 'url'=>array('/prestasi'), 
						'items'=>array(
					  	array('label'=>'Buat Prestasi','url'=>array('/Prestasi/create')),
					  	),
						'visible'=>UserWeb::instance()->isKesiswaan()),
				array('label'=>'Pelanggaran', 'url'=>array('/PencatatanPelanggaran'), 
					'items'=>array(
					  	array('label'=>'Buat Pelanggaran','url'=>array('/PencatatanPelanggaran/create')),
					  	array('label'=>'Atur Pelanggaran','url'=>array('/PencatatanPelanggaran/admin')),
					  	
					  	),

					'visible'=>UserWeb::instance()->isKesiswaan()),

				array('label'=>'Perizinan', 'url'=>array('/PencatatanPerizinan'),
					'items'=>array(
					  	array('label'=>'Buat Perizinan','url'=>array('/PencatatanPerizinan/create')),
					  	array('label'=>'Cari Perizinan','url'=>array('/PencatatanPerizinan/absensi')),
					),
				 	'visible'=>UserWeb::instance()->isKesiswaan()),
				//array('label'=>'Tahun Ajaran', 'url'=>array('/TahunAjaran'), 'visible'=>UserWeb::instance()->isKurikulum()),
				array('label'=>'Mata Pelajaran', 'url'=>array('/MataPelajaran'),
						'items'=>array(
						array('label'=>'Buat Mata Pelajaran','url'=>array('/MataPelajaran/create')),
						array('label'=>'Atur Mata Pelajaran','url'=>array('/MataPelajaran/admin')),

					), 
						'visible'=>UserWeb::instance()->isKurikulum()), 
				array('label'=>'Unduh', 'url'=>array('/unduh'),
						'items'=>array(
						array('label'=>'Unduh Laporan Nilai Santri','url'=>array('/unduhNilai')),
						array('label'=>'Unduh Rapor Santri','url'=>array('/unduhRapor')),

					), 
						'visible'=>UserWeb::instance()->isKurikulum()), 

				array('label'=>'Riwayat Penyakit', 'url'=>array('/RiwayatPenyakit'), 'visible'=>UserWeb::instance()->isKesiswaan()),

				array('label'=>'Keuangan ',  'url'=>array(''),
						'items'=>array(


					  	array('label'=>'Donatur','url'=>array('/Donatur')),
					  	array('label'=>'Pemasukan','url'=>array(''),

					  		'items'=>array(
						  	array('label'=>'Pemasukan Bos','url'=>array('/PemasukkanBos')),
						  	array('label'=>'Pemasukan Donatur','url'=>array('/PemasukkanDonatur')),
						  	array('label'=>'Pemasukan Santri','url'=>array('/PemasukkanSantri')),
							array('label'=>'Unduh Laporan Pemasukan','url'=>array('/UnduhTransaksiPemasukan')),
						  	)),

					  	array('label'=>'Pengeluaran','url'=>array('/transaksiPengeluaran')),
						array('label'=>'Unduh Laporan Pengeluaran','url'=>array('/UnduhTransaksiPengeluaran')),


					  	array('label'=>'Laporan Keuangan','url'=>array('/LaporanKeuangan')),
						array('label'=>'Unduh Laporan Keuangan','url'=>array('Site/UnduhLaporanKeuangan')),
				  	),
						'visible'=>UserWeb::instance()->isBendahara()),
			),
		)); ?>
	</div>
	</div>
	
	



	<div class="scroll" id="newbar2">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>
	</div>
	

	<div class="clear"></div>

	<div id="footer">
		Hak Cipta &copy; <?php echo date('Y'); ?> oleh Propensi A03.<br/>
		Seluruh Hak Cipta Dilindungi Undang-Undang.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
