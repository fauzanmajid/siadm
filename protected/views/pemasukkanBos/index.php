<?php
/* @var $this PemasukkanBosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pemasukkan Boses',
);

$this->menu=array(
	array('label'=>'Create PemasukkanBos', 'url'=>array('create')),
	array('label'=>'Manage PemasukkanBos', 'url'=>array('admin')),
);
?>

<h1>Pemasukkan Boses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
