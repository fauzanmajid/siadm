<?php
/* @var $this SantriController */
/* @var $model Santri */

$this->breadcrumbs=array(
	'Santris'=>array('index'),
	$model->nip=>array('view','id'=>$model->nip),
	'Update',
);

$this->menu=array(
	array('label'=>'List Santri', 'url'=>array('index')),
	array('label'=>'Create Santri', 'url'=>array('create')),
	array('label'=>'View Santri', 'url'=>array('view', 'id'=>$model->nip)),
	array('label'=>'Manage Santri', 'url'=>array('admin')),
);
?>

<h1>Update Santri <?php echo $model->nip; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>