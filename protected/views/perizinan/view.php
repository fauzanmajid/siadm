<?php
/* @var $this PerizinanController */
/* @var $model Perizinan */

/*$this->breadcrumbs=array(
	'Perizinans'=>array('index'),
	$model->no_izin,
);*/

$this->menu=array(
	array('label'=>'Daftar Perizinan Santri', 'url'=>array('index')),
	array('label'=>'Tambah Perizinan Santri', 'url'=>array('create')),
	array('label'=>'Atur Perizinan Santri', 'url'=>array('update', 'id'=>$model->no_izin)),
	array('label'=>'Hapus Perizinan Santri', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->no_izin),'confirm'=>'Apakah anda yakin ingin menghapus perizinan santri ini?')),
	array('label'=>'Manage Perizinan', 'url'=>array('admin')),
);
?>

<h1>Lihat Perizinan Santri #<?php echo $model->no_izin; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'no_izin',
		'deskripsi',
		'durasi',
		'tanggal_awal',
		'tanggal_akhir',
		'kategori',
	),
)); ?>
