<?php
/* @var $this RiwayatPenyakitController */
/* @var $model RiwayatPenyakit */

$this->breadcrumbs=array(
	'Riwayat Penyakits'=>array('index'),
	$model->no_pencatatan,
);

$this->menu=array(
	array('label'=>'List RiwayatPenyakit', 'url'=>array('index')),
	array('label'=>'Create RiwayatPenyakit', 'url'=>array('create')),
	array('label'=>'Update RiwayatPenyakit', 'url'=>array('update', 'id'=>$model->no_pencatatan)),
	array('label'=>'Delete RiwayatPenyakit', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->no_pencatatan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RiwayatPenyakit', 'url'=>array('admin')),
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
