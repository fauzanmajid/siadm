<?php
/* @var $this DonaturController */
/* @var $model Donatur */

$this->breadcrumbs=array(
	'Donatur'=>array('index'),
	$model->id,
);

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
