<?php
/* @var $this PelanggaranController */
/* @var $model Pelanggaran */

$this->breadcrumbs=array(
	'Pelanggarans'=>array('index'),
	$model->no_pelanggaran=>array('view','id'=>$model->no_pelanggaran),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pelanggaran', 'url'=>array('index')),
	array('label'=>'Create Pelanggaran', 'url'=>array('create')),
	array('label'=>'View Pelanggaran', 'url'=>array('view', 'id'=>$model->no_pelanggaran)),
	array('label'=>'Manage Pelanggaran', 'url'=>array('admin')),
);
?>

<h1>Update Pelanggaran <?php echo $model->no_pelanggaran; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>