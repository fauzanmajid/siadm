<?php
/* @var $this PemasukkanSantriController */
/* @var $model PemasukkanSantri */

$this->breadcrumbs=array(
	'Pemasukkan Santris'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PemasukkanSantri', 'url'=>array('index')),
	array('label'=>'Manage PemasukkanSantri', 'url'=>array('admin')),
);
?>

<h1>Create PemasukkanSantri</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>