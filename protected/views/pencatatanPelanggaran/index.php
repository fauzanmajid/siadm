<?php
/* @var $this PencatatanPelanggaranController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Pencatatan Pelanggaran',
);*/

$this->menu=array(
	array('label'=>'Create PencatatanPelanggaran', 'url'=>array('create')),
	array('label'=>'Manage PencatatanPelanggaran', 'url'=>array('admin')),
);
?>

<h1>Pencatatan Pelanggaran</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
