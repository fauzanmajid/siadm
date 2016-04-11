<?php
/* @var $this PencatatanPelanggaranController */
/* @var $model PencatatanPelanggaran */

$this->breadcrumbs=array(
	'Pencatatan Pelanggarans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PencatatanPelanggaran', 'url'=>array('index')),
	array('label'=>'Create PencatatanPelanggaran', 'url'=>array('create')),
	array('label'=>'View PencatatanPelanggaran', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PencatatanPelanggaran', 'url'=>array('admin')),
);
?>

<h1>Update PencatatanPelanggaran <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>