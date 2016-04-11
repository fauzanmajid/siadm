<?php
/* @var $this SantriController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Santris',
);

$this->menu=array(
	array('label'=>'Create Santri', 'url'=>array('create')),
	array('label'=>'Manage Santri', 'url'=>array('admin')),
);
?>

<h1>Santris</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
