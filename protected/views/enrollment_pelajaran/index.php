<?php
/* @var $this Enrollment_PelajaranController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Enrollment  Pelajaran',
);

$this->menu=array(
	array('label'=>'Buat Enrollment Pelajaran', 'url'=>array('create')),
	array('label'=>'Sunting Enrollment Pelajaran', 'url'=>array('admin')),
);
?>

<h1>Enrollment  Pelajaran</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
