<?php
/* @var $this TransaksiPengeluaranController */
/* @var $model TransaksiPengeluaran */

/*$this->breadcrumbs=array(
	'Transaksi Pengeluarans'=>array('index'),
	$model->kode,
);

$this->menu=array(
	array('label'=>'List TransaksiPengeluaran', 'url'=>array('index')),
	array('label'=>'Create TransaksiPengeluaran', 'url'=>array('create')),
	array('label'=>'Update TransaksiPengeluaran', 'url'=>array('update', 'id'=>$model->kode)),
	array('label'=>'Delete TransaksiPengeluaran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TransaksiPengeluaran', 'url'=>array('admin')),
);*/
?>

<h1>Lihat Transaksi Pengeluaran #<?php echo $model->kode; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode',
		'id_bendahara',
		'nominal',
		'Deskripsi',
		'tanggal_pengeluaran',
		'timestamp',
	),
)); ?>
