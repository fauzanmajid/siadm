<?php
/* @var $this SantriController */
/* @var $model Santri */


$this->menu=array(
	array('label'=>'Daftar Santri', 'url'=>array('index')),
	array('label'=>'Tambah Santri', 'url'=>array('create')),
	array('label'=>'Atur Santri', 'url'=>array('update', 'id'=>$model->nip)),
	array('label'=>'Hapus Santri', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nip),'confirm'=>'Apakah ada yakin ingin menghapus santri ini?')),
	array('label'=>'Atur Santri', 'url'=>array('admin')),
);
?>

<h1>View Santri #<?php echo $model->nip; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nip',
		'nis',
		'nik',
		'nisn',
		'nama_lengkap',
		'nama_kecil',
		'status',
		'alamat',
		'jenjang',
		'tempat_lahir',
		'tanggal_lahir',
		'golongan_darah',
		'anak_ke',
		'jum_saudara',
		'Perwalian_nip_santri',
		'Perwalian_status',
		'Pemasukkan_santri_kode',
	),
)); ?>
