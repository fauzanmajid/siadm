<?php
/* @var $this PemasukkanDonaturController */
/* @var $model PemasukkanDonatur */

$this->breadcrumbs=array(
	'Pemasukkan Donatur'=>array('index'),
	'Create',
);

// $this->menu=array(
// 	array('label'=>'List PemasukkanDonatur', 'url'=>array('index')),
// 	array('label'=>'Manage PemasukkanDonatur', 'url'=>array('admin')),
// );
?>

<h1>Buat Pemasukkan Donatur</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>