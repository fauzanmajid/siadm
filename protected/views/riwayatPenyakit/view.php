<?php
/* @var $this RiwayatPenyakitController */
/* @var $model RiwayatPenyakit */



$this->menu=array(
	array('label'=>'Daftar Riwayat Penyakit', 'url'=>array('index')),
	array('label'=>'Buat Riwayat Penyakit', 'url'=>array('create')),
	array('label'=>'Ubah Riwayat Penyakit', 'url'=>array('update', 'id'=>$model->no_pencatatan)),
	array('label'=>'Hapus Riwayat Penyakit', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->no_pencatatan),'confirm'=>'Apakah anda yakin ingin menghapus data ini ?')),
	
);
?>

<h1>View RiwayatPenyakit #<?php echo $model->no_pencatatan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'no_pencatatan',
		'nip_santri',
		'nama_penyakit',
		'tanggal',
	),
)); ?>
