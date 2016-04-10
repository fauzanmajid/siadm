<?php
/* @var $this PrestasiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Prestasis',
);

$this->menu=array(
	array('label'=>'Create Prestasi', 'url'=>array('create')),
	array('label'=>'Manage Prestasi', 'url'=>array('admin')),
);
?>

<h1>Prestasis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
