<?php
/* @var $this DonaturController */
/* @var $model Donatur */

$this->breadcrumbs=array(
	'Donatur'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

?>

<h1>Sunting Donatur <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>