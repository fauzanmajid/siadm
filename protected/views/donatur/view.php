<?php
/* @var $this DonaturController */
/* @var $model Donatur */

$this->breadcrumbs=array(
	'Donatur'=>array('index'),
	$model->id,
);

// $this->menu=array(
// 	array('label'=>'List Donatur', 'url'=>array('index')),
// 	array('label'=>'Create Donatur', 'url'=>array('create')),
// 	array('label'=>'Update Donatur', 'url'=>array('update', 'id'=>$model->id)),
// 	array('label'=>'Delete Donatur', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage Donatur', 'url'=>array('admin')),
// );
?>

<h1>Lihat Donatur <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama_lengkap',
		'pekerjaan',
		'alamat',
		'no_telepon',
	),
)); ?>
