<?php
/* @var $this PencatatanPelanggaranController */
/* @var $model PencatatanPelanggaran */

$this->breadcrumbs=array(
	'Pencatatan Pelanggarans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PencatatanPelanggaran', 'url'=>array('index')),
	array('label'=>'Manage PencatatanPelanggaran', 'url'=>array('admin')),
);
?>

<h1>Create PencatatanPelanggaran</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>