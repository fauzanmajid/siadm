<?php
/* @var $this PerizinanController */
/* @var $model Perizinan */

$this->breadcrumbs=array(
	'Perizinans'=>array('index'),
	$model->no_izin,
);

$this->menu=array(
	array('label'=>'List Perizinan', 'url'=>array('index')),
	array('label'=>'Create Perizinan', 'url'=>array('create')),
	array('label'=>'Update Perizinan', 'url'=>array('update', 'id'=>$model->no_izin)),
	array('label'=>'Delete Perizinan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->no_izin),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Perizinan', 'url'=>array('admin')),
);
?>

<h1>View Perizinan #<?php echo $model->no_izin; ?></h1>

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
