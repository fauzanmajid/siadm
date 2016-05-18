<?php
/* @var $this SantriController */
/* @var $model Santri */

/*
$this->menu=array(
	array('label'=>'Daftar Santri', 'url'=>array('index')),
	array('label'=>'Buat Data Santri', 'url'=>array('create')),
	array('label'=>'Atur Data Santri', 'url'=>array('update', 'id'=>$model->nip)),
	array('label'=>'Hapus Data Santri', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nip),'confirm'=>'Apakah ada yakin ingin menghapus santri ini?')),
	array('label'=>'Atur Data Santri', 'url'=>array('admin')),
);
*/
?>

<h1>Lihat Data Santri <?php echo $model->nama_lengkap; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nip',
		'nis',
		'nik',
		'nisn',
		'nama_lengkap',
		'nama_kecil',
		'jenis_kelamin',
		'status',
		'alamat',
		'jenjang',
		'tempat_lahir',
		'tanggal_lahir',
		'golongan_darah',
		'anak_ke',
		'jum_saudara',
		'timestamp',
		//'foto_url'
	),
)); ?>
