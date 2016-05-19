<?php
/* @var $this KelasController */
/* @var $model Kelas */

$this->breadcrumbs=array(
	'Kelas'=>array('index'),
	'Buat',
);
/*
$this->menu=array(
	array('label'=>'Daftar Kelas', 'url'=>array('index')),
<<<<<<< HEAD
	array('label'=>'Sunting Kelas', 'url'=>array('admin')),
);
*/
?>

<h1>Buat Kelas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>