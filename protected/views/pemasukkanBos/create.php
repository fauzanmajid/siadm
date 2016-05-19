<?php
/* @var $this PemasukkanBosController */
/* @var $model PemasukkanBos */


$this->breadcrumbs=array(
	'Pemasukkan Boses'=>array('index'),
	'Create',
);
/*
$this->menu=array(
	array('label'=>'List PemasukkanBos', 'url'=>array('index')),
	array('label'=>'Manage PemasukkanBos', 'url'=>array('admin')),
);
*/
?>

<h1>Buat Pemasukan BOS</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>