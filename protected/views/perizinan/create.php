<?php
/* @var $this PerizinanController */
/* @var $model Perizinan */

$this->breadcrumbs=array(
	'Perizinans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Perizinan', 'url'=>array('index')),
	array('label'=>'Manage Perizinan', 'url'=>array('admin')),
);
?>

<h1>Create Perizinan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>