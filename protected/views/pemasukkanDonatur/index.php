<?php
/* @var $this PemasukkanDonaturController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pemasukkan Donaturs',
);

$this->menu=array(
	array('label'=>'Create PemasukkanDonatur', 'url'=>array('create')),
	array('label'=>'Manage PemasukkanDonatur', 'url'=>array('admin')),
);
?>

<h1>Pemasukkan Donaturs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
