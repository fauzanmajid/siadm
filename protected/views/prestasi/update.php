<?php
/* @var $this PrestasiController */
/* @var $model Prestasi */

$this->breadcrumbs=array(
	'Prestasis'=>array('index'),
	$model->no_pencatatan=>array('view','id'=>$model->no_pencatatan),
	'Update',
);

$this->menu=array(
	array('label'=>'List Prestasi', 'url'=>array('index')),
	array('label'=>'Create Prestasi', 'url'=>array('create')),
	array('label'=>'View Prestasi', 'url'=>array('view', 'id'=>$model->no_pencatatan)),
	array('label'=>'Manage Prestasi', 'url'=>array('admin')),
);
?>

<h1>Update Prestasi <?php echo $model->no_pencatatan; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>