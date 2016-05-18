<?php
/* @var $this PemasukkanDonaturController */
/* @var $model PemasukkanDonatur */

/*$this->breadcrumbs=array(
	'Pemasukkan Donaturs'=>array('index'),
	$model->kode=>array('view','id'=>$model->kode),
	'Update',
);

$this->menu=array(
	array('label'=>'List PemasukkanDonatur', 'url'=>array('index')),
	array('label'=>'Create PemasukkanDonatur', 'url'=>array('create')),
	array('label'=>'View PemasukkanDonatur', 'url'=>array('view', 'id'=>$model->kode)),
	array('label'=>'Manage PemasukkanDonatur', 'url'=>array('admin')),
);*/
?>

<h1>Atur Pemasukan Donatur <?php echo $model->kode; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>