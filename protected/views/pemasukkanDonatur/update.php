<?php
/* @var $this PemasukkanDonaturController */
/* @var $model PemasukkanDonatur */

<<<<<<< HEAD
<<<<<<< HEAD
$this->breadcrumbs=array(
=======
/*$this->breadcrumbs=array(
>>>>>>> master
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
<<<<<<< HEAD
);
?>

<h1>Update PemasukkanDonatur <?php echo $model->kode; ?></h1>
=======
=======
>>>>>>> master
);*/
?>

<h1>Atur Pemasukan Donatur <?php echo $model->kode; ?></h1>
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> master

<?php $this->renderPartial('_form', array('model'=>$model)); ?>