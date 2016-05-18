<?php
/* @var $this DonaturController */
/* @var $model Donatur */

$this->breadcrumbs=array(
	'Donatur'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

// $this->menu=array(
// 	array('label'=>'List Donatur', 'url'=>array('index')),
// 	array('label'=>'Create Donatur', 'url'=>array('create')),
// 	array('label'=>'View Donatur', 'url'=>array('view', 'id'=>$model->id)),
// 	array('label'=>'Manage Donatur', 'url'=>array('admin')),
// );
?>

<h1>Sunting Donatur <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>