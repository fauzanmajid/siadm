<?php
/* @var $this PemasukkanSantriController */
/* @var $model PemasukkanSantri */

/*$this->breadcrumbs=array(
	'Pemasukkan Santris'=>array('index'),
	$model->kode=>array('view','id'=>$model->kode),
	'Update',
);

$this->menu=array(
	array('label'=>'List PemasukkanSantri', 'url'=>array('index')),
	array('label'=>'Create PemasukkanSantri', 'url'=>array('create')),
	array('label'=>'View PemasukkanSantri', 'url'=>array('view', 'id'=>$model->kode)),
	array('label'=>'Manage PemasukkanSantri', 'url'=>array('admin')),
);*/
?>

<h1>Atur Pemasukan Santri <?php echo $model->kode; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>