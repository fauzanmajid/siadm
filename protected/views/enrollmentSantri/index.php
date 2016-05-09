<?php
/* @var $this EnrollmentSantriController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Enrollment Santri',
);

$this->menu=array(
	array('label'=>'Buat Enrollment Santri', 'url'=>array('create')),
	array('label'=>'Sunting Enrollment Santri', 'url'=>array('admin')),
);
?>

<h1>Enrollment Santri </h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
