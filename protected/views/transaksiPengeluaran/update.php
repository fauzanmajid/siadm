<?php
/* @var $this TransaksiPengeluaranController */
/* @var $model TransaksiPengeluaran */

$this->breadcrumbs=array(
	'Pengeluaran'=>array('index'),
	$model->kode=>array('view','id'=>$model->kode),
	'Sunting',
);

$this->menu=array(
	array('label'=>'Daftar Pengeluaran', 'url'=>array('index')),
	array('label'=>'Buat Pengeluaran', 'url'=>array('create')),
	array('label'=>'Lihat Pengeluaran', 'url'=>array('view', 'id'=>$model->kode)),
	array('label'=>'Kelola Pengeluaran', 'url'=>array('admin')),
);
?>

<h1>Sunting Pengeluaran <?php echo $model->kode; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>