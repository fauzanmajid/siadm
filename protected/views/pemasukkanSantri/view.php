<?php
/* @var $this PemasukkanSantriController */
/* @var $model PemasukkanSantri */

$this->breadcrumbs=array(
	'Pemasukkan Santris'=>array('index'),
	$model->kode,
);

$this->menu=array(
	array('label'=>'List PemasukkanSantri', 'url'=>array('index')),
	array('label'=>'Create PemasukkanSantri', 'url'=>array('create')),
	array('label'=>'Update PemasukkanSantri', 'url'=>array('update', 'id'=>$model->kode)),
	array('label'=>'Delete PemasukkanSantri', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PemasukkanSantri', 'url'=>array('admin')),
);
?>

<h1>View PemasukkanSantri #<?php echo $model->kode; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode',
		'id_bendahara',
		'nip_santri',
		'nominal',
		'timestamp',
	),
)); ?>
