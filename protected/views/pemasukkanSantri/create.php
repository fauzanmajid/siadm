<?php
/* @var $this PemasukkanSantriController */
/* @var $model PemasukkanSantri */

$this->breadcrumbs=array(
	'Pemasukkan Santri'=>array('index'),
	'Create',
);

// $this->menu=array(
// 	array('label'=>'List PemasukkanSantri', 'url'=>array('index')),
// 	array('label'=>'Manage PemasukkanSantri', 'url'=>array('admin')),
// );
?>

<h1>Buat Pemasukkan Santri</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>