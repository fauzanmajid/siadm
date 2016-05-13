<?php
/* @var $this Enrollment_PelajaranController */
/* @var $model Enrollment_Pelajaran */

/*$this->breadcrumbs=array(
	'Enrollment  Pelajaran'=>array('index'),
	'Buat',
);

$this->menu=array(
	array('label'=>'Daftar Enrollment Pelajaran', 'url'=>array('index')),
	array('label'=>'Sunting Enrollment Pelajaran', 'url'=>array('admin')),
);*/
?>

<h1>Buat Alokasi Pelajaran</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>