<?php
/* @var $this Enrollment_PelajaranController */
/* @var $model Enrollment_Pelajaran */

<<<<<<< HEAD
$this->breadcrumbs=array(
=======
/*$this->breadcrumbs=array(
>>>>>>> master
	'Enrollment  Pelajaran'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Enrollment Pelajaran', 'url'=>array('index')),
	array('label'=>'Create Enrollment Pelajaran', 'url'=>array('create')),
	array('label'=>'Update Enrollment Pelajaran', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Enrollment Pelajaran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Enrollment Pelajaran', 'url'=>array('admin')),
<<<<<<< HEAD
);
?>

<h1>Lihat Enrollment Pelajaran <?php echo $model->id; ?></h1>
=======
);*/
?>

<h1>Lihat Alokasi Pelajaran <?php echo $model->id; ?></h1>
>>>>>>> master

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_kelas',
		'id_matpel',
	),
)); ?>
