<?php
/* @var $this PemasukkanBosController */
/* @var $model PemasukkanBos */

/*$this->breadcrumbs=array(
	'Pemasukkan Boses'=>array('index'),
	$model->kode,
);

$this->menu=array(
	array('label'=>'List PemasukkanBos', 'url'=>array('index')),
	array('label'=>'Create PemasukkanBos', 'url'=>array('create')),
	array('label'=>'Update PemasukkanBos', 'url'=>array('update', 'id'=>$model->kode)),
	array('label'=>'Delete PemasukkanBos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PemasukkanBos', 'url'=>array('admin')),
);*/
?>

<h1>Lhat Pemasukan BOS #<?php echo $model->kode; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode',
		'id_bendahara',
		'Tanggal',
		'Keterangan',
		'nominal',
		'timestamp',
	),
)); ?>
