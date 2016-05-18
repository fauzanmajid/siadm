<?php
/* @var $this PemasukkanDonaturController */
/* @var $model PemasukkanDonatur */

<<<<<<< HEAD
$this->breadcrumbs=array(
=======
/*$this->breadcrumbs=array(
>>>>>>> master
	'Pemasukkan Donaturs'=>array('index'),
	$model->kode=>array('view','id'=>$model->kode),
	'Update',
);

$this->menu=array(
	array('label'=>'List PemasukkanDonatur', 'url'=>array('index')),
	array('label'=>'Create PemasukkanDonatur', 'url'=>array('create')),
	array('label'=>'View PemasukkanDonatur', 'url'=>array('view', 'id'=>$model->kode)),
	array('label'=>'Manage PemasukkanDonatur', 'url'=>array('admin')),
<<<<<<< HEAD
);
?>

<h1>Update PemasukkanDonatur <?php echo $model->kode; ?></h1>
=======
);*/
?>

<h1>Atur Pemasukan Donatur <?php echo $model->kode; ?></h1>
>>>>>>> master

<?php $this->renderPartial('_form', array('model'=>$model)); ?>