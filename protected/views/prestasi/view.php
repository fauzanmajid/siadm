<?php
/* @var $this PrestasiController */
/* @var $model Prestasi */

/*$this->breadcrumbs=array(
	'Prestasis'=>array('index'),
	$model->no_pencatatan,
);*/

$this->menu=array(
	array('label'=>'Catatan Prestasi Santri', 'url'=>array('index')),
	array('label'=>'Tambah Prestasi Santri', 'url'=>array('create')),
	array('label'=>'Atur Prestasi Santri', 'url'=>array('update', 'id'=>$model->no_pencatatan)),
	array('label'=>'Hapus Prestasi Santri', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->no_pencatatan),'confirm'=>'Apakah anda yakin ingin menghapus prestasi santri ini?')),
	array('label'=>'Atur Prestasi', 'url'=>array('admin')),
);
?>

<h1>Lihat Prestasi Santri #<?php echo $model->no_pencatatan; ?></h1>

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
