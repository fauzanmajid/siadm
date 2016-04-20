<?php
/* @var $this UserController */
/* @var $model User */

/*$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);*/

$this->menu=array(
	array('label'=>'Daftar Pengguna', 'url'=>array('index')),
	array('label'=>'Buat Pengguna', 'url'=>array('create')),
	array('label'=>'Lihat Pengguna', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Atur Pengguna', 'url'=>array('admin')),
);
?>

<h1>Atur Pengguna <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>