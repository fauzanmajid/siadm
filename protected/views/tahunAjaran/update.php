<?php
/* @var $this TahunAjaranController */
/* @var $model TahunAjaran */

$this->breadcrumbs=array(
	'Tahun Ajarans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TahunAjaran', 'url'=>array('index')),
	array('label'=>'Create TahunAjaran', 'url'=>array('create')),
	array('label'=>'View TahunAjaran', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TahunAjaran', 'url'=>array('admin')),
);
?>

<h1>Update TahunAjaran <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>