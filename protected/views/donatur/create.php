<?php
/* @var $this DonaturController */
/* @var $model Donatur */

$this->breadcrumbs=array(
	'Donatur'=>array('index'),
	'Create',
);

// $this->menu=array(
// 	array('label'=>'List Donatur', 'url'=>array('index')),
// 	array('label'=>'Manage Donatur', 'url'=>array('admin')),
// );
?>

<h1>Buat Donatur</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>