<?php
/* @var $this PelanggaranController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pelanggarans',
);

$this->menu=array(
	array('label'=>'Create Pelanggaran', 'url'=>array('create')),
	array('label'=>'Manage Pelanggaran', 'url'=>array('admin')),
);
?>

<h1>Pelanggarans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
