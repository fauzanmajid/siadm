<?php
/* @var $this TahunAjaranController */
/* @var $model TahunAjaran */

$this->breadcrumbs=array(
	'Tahun Ajarans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TahunAjaran', 'url'=>array('index')),
	array('label'=>'Manage TahunAjaran', 'url'=>array('admin')),
);
?>

<h1>Create TahunAjaran</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>