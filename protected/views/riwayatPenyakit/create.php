<?php
/* @var $this RiwayatPenyakitController */
/* @var $model RiwayatPenyakit */

$this->breadcrumbs=array(
	'Riwayat Penyakits'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RiwayatPenyakit', 'url'=>array('index')),
	array('label'=>'Manage RiwayatPenyakit', 'url'=>array('admin')),
);
?>

<h1>Create RiwayatPenyakit</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>