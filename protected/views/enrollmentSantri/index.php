<?php
/* @var $this EnrollmentSantriController */
/* @var $dataProvider CActiveDataProvider */

<<<<<<< HEAD
$this->breadcrumbs=array(
=======
/*$this->breadcrumbs=array(
>>>>>>> master
	'Enrollment Santri',
);

$this->menu=array(
	array('label'=>'Buat Enrollment Santri', 'url'=>array('create')),
	array('label'=>'Sunting Enrollment Santri', 'url'=>array('admin')),
<<<<<<< HEAD
);
?>

<h1>Enrollment Santri </h1>
=======
);*/
?>

<h1>Alokasi Santri </h1>
>>>>>>> master

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
