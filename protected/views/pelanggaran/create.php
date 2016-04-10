<?php
/* @var $this PelanggaranController */
/* @var $model Pelanggaran */

$this->breadcrumbs=array(
	'Pelanggarans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pelanggaran', 'url'=>array('index')),
	array('label'=>'Manage Pelanggaran', 'url'=>array('admin')),
);
?>

<h1>Create Pelanggaran</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>