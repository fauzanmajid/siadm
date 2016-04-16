<?php
/* @var $this MataPelajaranController */
/* @var $model MataPelajaran */

/*$this->breadcrumbs=array(
	'Mata Pelajarans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);*/

$this->menu=array(
	array('label'=>'Daftar Mata Pelajaran', 'url'=>array('index')),
	array('label'=>'Buat Mata Pelajaran', 'url'=>array('create')),
	array('label'=>'Lihat Mata Pelajaran', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Update MataPelajaran <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>