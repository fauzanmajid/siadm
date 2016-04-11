<?php
/* @var $this PrestasiController */
/* @var $model Prestasi */

$this->breadcrumbs=array(
	'Prestasis'=>array('index'),
	$model->no_pencatatan,
);

$this->menu=array(
	array('label'=>'List Prestasi', 'url'=>array('index')),
	array('label'=>'Create Prestasi', 'url'=>array('create')),
	array('label'=>'Update Prestasi', 'url'=>array('update', 'id'=>$model->no_pencatatan)),
	array('label'=>'Delete Prestasi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->no_pencatatan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Prestasi', 'url'=>array('admin')),
);
?>

<h1>View Prestasi #<?php echo $model->no_pencatatan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'no_pencatatan',
		'deskripsi',
		'jenis',
		'tanggal',
		'nip_santri',
	),
)); ?>
