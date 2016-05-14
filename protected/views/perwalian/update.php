<?php
/* @var $this PerwalianController */
/* @var $model Perwalian */

/*$this->breadcrumbs=array(
	'Perwalians'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Perwalian', 'url'=>array('index')),
	array('label'=>'Create Perwalian', 'url'=>array('create')),
	array('label'=>'View Perwalian', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Perwalian', 'url'=>array('admin')),
);*/
?>

<h1>Atur Perwalian Santri #<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>