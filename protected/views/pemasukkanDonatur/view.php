<?php
/* @var $this PemasukkanDonaturController */
/* @var $model PemasukkanDonatur */

$this->breadcrumbs=array(
	'Pemasukkan Donatur'=>array('index'),
	$model->kode,
);

$this->menu=array(
	array('label'=>'Daftar Pemasukkan Donatur', 'url'=>array('index')),
	// array('label'=>'Create PemasukkanDonatur', 'url'=>array('create')),
	// array('label'=>'Update PemasukkanDonatur', 'url'=>array('update', 'id'=>$model->kode)),
	// array('label'=>'Delete PemasukkanDonatur', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode),'confirm'=>'Are you sure you want to delete this item?')),
	// array('label'=>'Manage PemasukkanDonatur', 'url'=>array('admin')),
);
?>

<h1>Lihat Pemasukkan Donatur #<?php echo $model->kode; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode',
		'id_bendahara',
		'nominal',
		'timestamp',
		'id_donatur',
	),
)); ?>
