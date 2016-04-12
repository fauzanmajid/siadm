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
<div id="logo3" align="right">
	<?php $this->widget('zii.widgets.CMenu',array(
		'items'=>array(
			array(
				'label'=>'Logout ('.Yii::app()->user->role.')', 
				'url'=>array('/site/logout'), 
				'visible'=>!Yii::app()->user->isGuest
			)
		),
	)); 
	?>

	<span>
    <?php
	    if (UserWeb::instance()->isAdmin()) {
	        echo 'Administrator';
	    }
	    else {
	        echo 'User';
    	}
    ?>
    </span>
</div>

	<div id="header">
		<div id="logo">
			<?= CHtml::image(Yii::app()->request->baseUrl . '/img/logo2.png', 'Logo') ?> 
			<?php echo CHtml::encode(Yii::app()->name); ?> 
		</div>
	</div>
	<!-- header -->


	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				//array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Prestasi', 'url'=>array('/prestasi')),
				array('label'=>'Riwayat Penyakit', 'url'=>array('/RiwayatPenyakit')),
				array('label'=>'Pelanggaran', 'url'=>array('/PencatatanPelanggaran')),
				array('label'=>'Perizinan', 'url'=>array('/Perizinan')),
				array('label'=>'Data Santri', 'url'=>array('/Santri')),
				//array('label'=>'Site', 'url'=>array('/Site')),
				array('label'=>'User', 'url'=>array('/User')),
				array('label'=>'Tahun Ajaran', 'url'=>array('/TahunAjaran')),
				array('label'=>'Mata Pelajaran', 'url'=>array('/MataPelajaran')),
				//array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Propensi A03.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
