<?php
/* @var $this SantriController */
/* @var $model Santri */

$this->breadcrumbs=array(
	'Santris'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Santri', 'url'=>array('index')),
	array('label'=>'Manage Santri', 'url'=>array('admin')),
);
?>

<h1>Create Santri</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>