<?php
/* @var $this TahunAjaranController */
/* @var $model TahunAjaran */

$this->breadcrumbs=array(
	'Tahun Ajarans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TahunAjaran', 'url'=>array('index')),
	array('label'=>'Create TahunAjaran', 'url'=>array('create')),
	array('label'=>'Update TahunAjaran', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TahunAjaran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TahunAjaran', 'url'=>array('admin')),
);
?>

<h1>View TahunAjaran #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tahun_ajaran',
		'id_matpel',
	),
)); ?>
