<?php
/* @var $this RiwayatPenyakitController */
/* @var $model RiwayatPenyakit */

$this->breadcrumbs=array(
	'Riwayat Penyakits'=>array('index'),
	$model->no_pencatatan=>array('view','id'=>$model->no_pencatatan),
	'Update',
);

$this->menu=array(
	array('label'=>'Daftar Riwayat Penyakit', 'url'=>array('index')),
	array('label'=>'Buat Riwayat Penyakit', 'url'=>array('create')),
	array('label'=>'Ubah Riwayat Penyakit', 'url'=>array('update', 'id'=>$model->no_pencatatan)),
	
);
?>

<h1>Update RiwayatPenyakit <?php echo $model->no_pencatatan; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>