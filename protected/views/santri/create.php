<?php
/* @var $this SantriController */
/* @var $model Santri */

/*$this->breadcrumbs=array(
	'Data Santri'=>array('index'),
	'Buat Data Santri',
);*/

$this->menu=array(
	array('label'=>'Daftar Santri', 'url'=>array('index')),
	array('label'=>'Atur Data Santri', 'url'=>array('admin')),
);
?>

<h1>Buat Data Santri</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>