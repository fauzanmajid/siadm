<?php
/* @var $this DonaturController */
/* @var $model Donatur */

$this->breadcrumbs=array(
	'Donatur'=>array('index'),
	'Create',
);

?>

<h1>Buat Donatur</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>