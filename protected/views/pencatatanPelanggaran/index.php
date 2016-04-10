<?php
/* @var $this PencatatanPelanggaranController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pencatatan Pelanggarans',
);

$this->menu=array(
	array('label'=>'Create PencatatanPelanggaran', 'url'=>array('create')),
	array('label'=>'Manage PencatatanPelanggaran', 'url'=>array('admin')),
);
?>

<h1>Pencatatan Pelanggarans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
