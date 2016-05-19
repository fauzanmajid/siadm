<?php
/* @var $this PerwalianController */
/* @var $model Perwalian */
<<<<<<< HEAD
<<<<<<< HEAD

$this->breadcrumbs=array(
	'Perwalians'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Perwalian', 'url'=>array('index')),
	array('label'=>'Create Perwalian', 'url'=>array('create')),
	array('label'=>'Update Perwalian', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Perwalian', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Perwalian', 'url'=>array('admin')),
);
?>

<h1>View Perwalian #<?php echo $model->id; ?></h1>
=======
?>

<h1>Lihat Wali Santri <?php echo $model->id; ?></h1>
>>>>>>> master
=======
?>

<h1>Lihat Wali Santri <?php echo $model->id; ?></h1>
>>>>>>> master

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nip_santri',
		'status',
		'nama',
		'tempat_lahir',
		'tanggal_lahir',
		'agama',
		'alamat',
		'no_telepon',
		'pekerjaan',
		'pendidikan',
		'penghasilan',
	),
)); ?>
