<?php
/* @var $this TahunAjaranController */
/* @var $model TahunAjaran */

/*$this->breadcrumbs=array(
	'Tahun Ajarans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);*/

$this->menu=array(
	array('label'=>'Daftar Tahun Ajaran', 'url'=>array('index')),
	array('label'=>'Buat Tahun Ajaran', 'url'=>array('create')),
	array('label'=>'Lihat Tahun Ajaran', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Atur Tahun Ajaran', 'url'=>array('admin')),
);
?>

<h1>Atur Tahun Ajaran <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>