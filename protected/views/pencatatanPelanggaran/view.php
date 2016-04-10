<?php
/* @var $this PencatatanPelanggaranController */
/* @var $model PencatatanPelanggaran */

$this->breadcrumbs=array(
	'Pencatatan Pelanggarans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PencatatanPelanggaran', 'url'=>array('index')),
	array('label'=>'Create PencatatanPelanggaran', 'url'=>array('create')),
	array('label'=>'Update PencatatanPelanggaran', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PencatatanPelanggaran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PencatatanPelanggaran', 'url'=>array('admin')),
);
?>

<h1>View PencatatanPelanggaran #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'No_pelanggaran',
		'nip_santri',
		'id_kesiswaan',
	),
)); ?>
