<?php
/* @var $this RiwayatPenyakitController */
/* @var $model RiwayatPenyakit */

$this->breadcrumbs=array(
	'Riwayat Penyakits'=>array('index'),
	$model->no_pencatatan=>array('view','id'=>$model->no_pencatatan),
	'Update',
);

$this->menu=array(
	array('label'=>'List RiwayatPenyakit', 'url'=>array('index')),
	array('label'=>'Create RiwayatPenyakit', 'url'=>array('create')),
	array('label'=>'View RiwayatPenyakit', 'url'=>array('view', 'id'=>$model->no_pencatatan)),
	array('label'=>'Manage RiwayatPenyakit', 'url'=>array('admin')),
);
?>

<h1>Update RiwayatPenyakit <?php echo $model->no_pencatatan; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>