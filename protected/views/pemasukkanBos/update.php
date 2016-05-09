<?php
/* @var $this PemasukkanBosController */
/* @var $model PemasukkanBos */

$this->breadcrumbs=array(
	'Pemasukkan Boses'=>array('index'),
	$model->kode=>array('view','id'=>$model->kode),
	'Update',
);

$this->menu=array(
	array('label'=>'List PemasukkanBos', 'url'=>array('index')),
	array('label'=>'Create PemasukkanBos', 'url'=>array('create')),
	array('label'=>'View PemasukkanBos', 'url'=>array('view', 'id'=>$model->kode)),
	array('label'=>'Manage PemasukkanBos', 'url'=>array('admin')),
);
?>

<h1>Update PemasukkanBos <?php echo $model->kode; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>