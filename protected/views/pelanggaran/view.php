<?php
/* @var $this PelanggaranController */
/* @var $model Pelanggaran */

/*$this->breadcrumbs=array(
	'Pelanggarans'=>array('index'),
	$model->no_pelanggaran,
);*/

$this->menu=array(
	array('label'=>'List Pelanggaran', 'url'=>array('index')),
	array('label'=>'Create Pelanggaran', 'url'=>array('create')),
	array('label'=>'Update Pelanggaran', 'url'=>array('update', 'id'=>$model->no_pelanggaran)),
	array('label'=>'Delete Pelanggaran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->no_pelanggaran),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pelanggaran', 'url'=>array('admin')),
);
?>

<h1>Lihat Pelanggaran #<?php echo $model->no_pelanggaran; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'no_pelanggaran',
		'deskripsi',
	),
)); ?>
