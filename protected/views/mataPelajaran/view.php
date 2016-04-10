<?php
/* @var $this MataPelajaranController */
/* @var $model MataPelajaran */

$this->breadcrumbs=array(
	'Mata Pelajarans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MataPelajaran', 'url'=>array('index')),
	array('label'=>'Create MataPelajaran', 'url'=>array('create')),
	array('label'=>'Update MataPelajaran', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MataPelajaran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MataPelajaran', 'url'=>array('admin')),
);
?>

<h1>View MataPelajaran #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'jenjang',
	),
)); ?>
