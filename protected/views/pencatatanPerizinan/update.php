<?php
/* @var $this PencatatanPerizinanController */
/* @var $model PencatatanPerizinan */

/*$this->breadcrumbs=array(
	'Pencatatan Perizinans'=>array('index'),
	$model->pencatatan_perizinan=>array('view','id'=>$model->pencatatan_perizinan),
	'Update',
);*/

/*$this->menu=array(
	array('label'=>'Daftar Catatan Perizinan', 'url'=>array('index')),
	array('label'=>'Buat Catatan Perizinan', 'url'=>array('create')),
	array('label'=>'Lihat Catatan Perizinan', 'url'=>array('view', 'id'=>$model->pencatatan_perizinan)),
	array('label'=>'Atur Catatan Perizinan', 'url'=>array('admin')),
);*/
?>

<h1>Atur Perizinan Santri </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>