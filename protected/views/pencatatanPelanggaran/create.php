<?php
/* @var $this PencatatanPelanggaranController */
/* @var $model PencatatanPelanggaran */

/*$this->breadcrumbs=array(
	'Pencatatan Pelanggarans'=>array('index'),
	'Create',
);*/

$this->menu=array(
	array('label'=>'Daftar Pelanggaran Santri', 'url'=>array('index')),
	array('label'=>'Atur Pelanggaran Santri', 'url'=>array('admin')),
);
?>

<h1>Buat Pelanggaran Santri</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>