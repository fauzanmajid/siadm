<?php
/* @var $this PerwalianController */
/* @var $model Perwalian */

/*$this->breadcrumbs=array(
	'Perwalians'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Perwalian', 'url'=>array('index')),
	array('label'=>'Manage Perwalian', 'url'=>array('admin')),
);*/
?>

<h1>Buat Perwalian Santri</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>