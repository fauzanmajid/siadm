<?php
/* @var $this Enrolllment_GuruController */
/* @var $dataProvider CActiveDataProvider */

<<<<<<< HEAD
$this->breadcrumbs=array(
=======
/*$this->breadcrumbs=array(
>>>>>>> master
	'Enrollment  Guru',
);

$this->menu=array(
	array('label'=>'Buat Enrollment Guru', 'url'=>array('create')),
	array('label'=>'Sunting Enrollment Guru', 'url'=>array('admin')),
<<<<<<< HEAD
);
?>

<h1>Enrollment  Guru</h1>
=======
);*/
?>

<h1>Alokasi Guru</h1>
>>>>>>> master

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
