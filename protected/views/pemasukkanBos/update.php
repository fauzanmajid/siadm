<?php
/* @var $this PemasukkanBosController */
/* @var $model PemasukkanBos */

<<<<<<< HEAD
$this->breadcrumbs=array(
	'Pemasukkan Boses'=>array('index'),
	$model->kode=>array('view','id'=>$model->kode),
	'Update',
);

=======

/*$this->breadcrumbs=array(
	'Pemasukkan Boses'=>array('index'),

=======
>>>>>>> master
$this->menu=array(
	array('label'=>'List PemasukkanBos', 'url'=>array('index')),
	array('label'=>'Create PemasukkanBos', 'url'=>array('create')),
	array('label'=>'View PemasukkanBos', 'url'=>array('view', 'id'=>$model->kode)),
	array('label'=>'Manage PemasukkanBos', 'url'=>array('admin')),
<<<<<<< HEAD
);
?>

<h1>Update PemasukkanBos <?php echo $model->kode; ?></h1>
=======
);*/
?>

<h1>Atur Pemasukan BOS <?php echo $model->kode; ?></h1>
>>>>>>> master

<?php $this->renderPartial('_form', array('model'=>$model)); ?>