<?php
/* @var $this PrestasiController */
/* @var $model Prestasi */

/*$this->breadcrumbs=array(
	'Prestasis'=>array('index'),
	$model->no_pencatatan=>array('view','id'=>$model->no_pencatatan),
	'Update',
);*/

$this->menu=array(
	array('label'=>'Catatan Prestasi Santri', 'url'=>array('index')),
	array('label'=>'Buat Prestasi Santri', 'url'=>array('create')),
	array('label'=>'Lihat Prestasi Santri', 'url'=>array('view', 'id'=>$model->no_pencatatan)),
	
);
?>

<h1>Atur Prestasi Santri<?php echo $model->no_pencatatan; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>