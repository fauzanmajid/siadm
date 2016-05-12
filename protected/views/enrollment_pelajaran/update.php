<?php
/* @var $this Enrollment_PelajaranController */
/* @var $model Enrollment_Pelajaran */

$this->breadcrumbs=array(
	'Enrollment  Pelajarans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Enrollment_Pelajaran', 'url'=>array('index')),
	array('label'=>'Create Enrollment_Pelajaran', 'url'=>array('create')),
	array('label'=>'View Enrollment_Pelajaran', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Enrollment_Pelajaran', 'url'=>array('admin')),
);
?>

<h1>Update Enrollment_Pelajaran <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>