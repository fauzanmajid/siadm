<?php
/* @var $this EnrollmentSantriController */
/* @var $model EnrollmentSantri */

/*$this->breadcrumbs=array(
	'Enrollment Santri'=>array('index'),
	'Buat',
);

$this->menu=array(
	array('label'=>'Daftar EnrollmentSantri', 'url'=>array('index')),
	array('label'=>'Sunting EnrollmentSantri', 'url'=>array('admin')),
);*/
?>

<h1>Buat Alokasi Santri</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>