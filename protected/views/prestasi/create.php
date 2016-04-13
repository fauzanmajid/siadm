<?php
/* @var $this PrestasiController */
/* @var $model Prestasi */

/*$this->breadcrumbs=array(
	'Prestasis'=>array('index'),
	'Create',
);*/

$this->menu=array(
	array('label'=>'Daftar Prestasi Santri', 'url'=>array('index')),
	array('label'=>'Atur Prestasi Santri', 'url'=>array('admin')),
);
?>

<h1>Tambah Prestasi Santri</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>