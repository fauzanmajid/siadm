<?php
/* @var $this TransaksiPengeluaranController */
/* @var $model TransaksiPengeluaran */

$this->breadcrumbs=array(
	'Pengeluaran'=>array('index'),
	$model->kode,
);

$this->menu=array(
	array('label'=>'Daftar Pengeluaran', 'url'=>array('index')),
	array('label'=>'Buat Pengeluaran', 'url'=>array('create')),
	array('label'=>'Sunting Pengeluaran', 'url'=>array('update', 'id'=>$model->kode)),
	array('label'=>'Hapus Pengeluaran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Kelola TransaksiPengeluaran', 'url'=>array('admin')),
);
?>

<h1>:Lihat Pengeluaran <?php echo $model->kode; ?></h1>

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
