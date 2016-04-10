<?php
/* @var $this PerizinanController */
/* @var $model Perizinan */

$this->breadcrumbs=array(
	'Perizinans'=>array('index'),
	$model->no_izin=>array('view','id'=>$model->no_izin),
	'Update',
);

$this->menu=array(
	array('label'=>'List Perizinan', 'url'=>array('index')),
	array('label'=>'Create Perizinan', 'url'=>array('create')),
	array('label'=>'View Perizinan', 'url'=>array('view', 'id'=>$model->no_izin)),
	array('label'=>'Manage Perizinan', 'url'=>array('admin')),
);
?>

<h1>Update Perizinan <?php echo $model->no_izin; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>