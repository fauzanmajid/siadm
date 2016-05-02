<?php
/* @var $this TahunAjaranController */
/* @var $model TahunAjaran */

/*$this->breadcrumbs=array(
	'Tahun Ajarans'=>array('index'),
	'Create',
);*/

$this->menu=array(
	array('label'=>'Daftar Tahun Ajaran', 'url'=>array('index')),
	array('label'=>'Atur Tahun Ajaran', 'url'=>array('admin')),
);
?>

<h1>Buat Tahun Ajaran</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>