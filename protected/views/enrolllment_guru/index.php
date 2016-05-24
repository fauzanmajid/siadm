<?php
/* @var $this Enrolllment_GuruController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Enrollment  Guru',
);

$this->menu=array(
	array('label'=>'Buat Enrollment Guru', 'url'=>array('create')),
	array('label'=>'Sunting Enrollment Guru', 'url'=>array('admin')),
);
?>

);*/
?>

<h1>Alokasi Guru</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
