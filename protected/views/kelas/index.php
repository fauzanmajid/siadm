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

	
</head>
<div id="hedur">
<?php
/* @var $this KelasController */
/* @var $dataProvider CActiveDataProvider */

<<<<<<< HEAD
$this->breadcrumbs=array(
=======
/*$this->breadcrumbs=array(
>>>>>>> master
	'Kelas',
);
/*
$this->menu=array(
	array('label'=>'Buat Kelas', 'url'=>array('create')),
	array('label'=>'Sunting Kelas', 'url'=>array('admin')),
<<<<<<< HEAD
);
*/
?>
</div>
=======
);*/
?>

>>>>>>> master
<h1>Kelas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
