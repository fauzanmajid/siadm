<?php
/* @var $this SantriController */
/* @var $model Santri */

/*$this->breadcrumbs=array(
	'Data Santri'=>array('index'),
	$model->nip=>array('view','id'=>$model->nip),
	'Update',
);*/

/*$this->menu=array(
	array('label'=>'Daftar Santri', 'url'=>array('index')),
	array('label'=>'Buat Data Santri', 'url'=>array('create')),
	array('label'=>'Lihat Data Santri', 'url'=>array('view', 'id'=>$model->nip)),
	array('label'=>'Atur Data Santri', 'url'=>array('admin')),
);*/
?>

<h1>Atur Data Santri #<?php echo $model->nip; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>