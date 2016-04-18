<?php
/* @var $this PencatatanPerizinanController */
/* @var $model PencatatanPerizinan */

$this->breadcrumbs=array(
	'Pencatatan Perizinans'=>array('index'),
	$model->pencatatan_perizinan=>array('view','id'=>$model->pencatatan_perizinan),
	'Update',
);

$this->menu=array(
	array('label'=>'Daftar Pencatatan Perizinan', 'url'=>array('index')),
	array('label'=>'Buat Pencatatan Perizinan', 'url'=>array('create')),
	array('label'=>'Lihat Pencatatan Perizinan', 'url'=>array('view', 'id'=>$model->pencatatan_perizinan)),
	array('label'=>'Atur Pencatatan Perizinan', 'url'=>array('admin')),
);
?>

<h1>Ubah Pencatatan Perizinan <?php echo $model->pencatatan_perizinan; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>