<?php
/* @var $this KelasController */
/* @var $model Kelas */

<<<<<<< HEAD
$this->breadcrumbs=array(
=======
/*$this->breadcrumbs=array(
>>>>>>> master
	'Kelas'=>array('index'),
	'Buat',
);
/*
$this->menu=array(
	array('label'=>'Daftar Kelas', 'url'=>array('index')),
<<<<<<< HEAD
	array('label'=>'Sunting Kelas', 'url'=>array('admin')),
);
*/
=======
	array('label'=>'Atur Kelas', 'url'=>array('admin')),
);*/
>>>>>>> master
?>

<h1>Buat Kelas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>