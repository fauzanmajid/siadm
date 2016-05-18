<?php
/* @var $this Enrollment_PelajaranController */
/* @var $dataProvider CActiveDataProvider */

<<<<<<< HEAD
$this->breadcrumbs=array(
=======
/*$this->breadcrumbs=array(
>>>>>>> master
	'Enrollment  Pelajaran',
);

$this->menu=array(
	array('label'=>'Buat Enrollment Pelajaran', 'url'=>array('create')),
	array('label'=>'Sunting Enrollment Pelajaran', 'url'=>array('admin')),
<<<<<<< HEAD
);
?>

<h1>Enrollment  Pelajaran</h1>
=======
);*/
?>

<h1>Alokasi Pelajaran</h1>
>>>>>>> master

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
