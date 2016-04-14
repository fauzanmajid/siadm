<?php
/* @var $this PencatatanPelanggaranController */
/* @var $model PencatatanPelanggaran */

/*$this->breadcrumbs=array(
	'Pencatatan Pelanggarans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);*/

$this->menu=array(
	array('label'=>'Daftar Pelanggaran Santri', 'url'=>array('index')),
	array('label'=>'Tambah Pelanggaran Santri', 'url'=>array('create')),
	array('label'=>'Lihat Pelanggaran Santri', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Atur Pelanggaran Santri', 'url'=>array('admin')),
);
?>

<h1>Atur Pelanggaran Santri <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>