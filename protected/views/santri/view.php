<?php
/* @var $this SantriController */
/* @var $model Santri */

$this->breadcrumbs=array(
	'Santri'=>array('index'),
	$model->nip,
);

$this->menu=array(
	array('label'=>'List Santri', 'url'=>array('index')),
	array('label'=>'Create Santri', 'url'=>array('create')),
	array('label'=>'Update Santri', 'url'=>array('update', 'id'=>$model->nip)),
	array('label'=>'Delete Santri', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nip),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Santri', 'url'=>array('admin')),
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
