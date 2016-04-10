<?php
/* @var $this PrestasiController */
/* @var $model Prestasi */

$this->breadcrumbs=array(
	'Prestasis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Prestasi', 'url'=>array('index')),
	array('label'=>'Manage Prestasi', 'url'=>array('admin')),
);
?>

<h1>Create Prestasi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>