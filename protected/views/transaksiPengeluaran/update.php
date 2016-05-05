<?php
/* @var $this TransaksiPengeluaranController */
/* @var $model TransaksiPengeluaran */

$this->breadcrumbs=array(
	'Transaksi Pengeluarans'=>array('index'),
	$model->kode=>array('view','id'=>$model->kode),
	'Update',
);

$this->menu=array(
	array('label'=>'List TransaksiPengeluaran', 'url'=>array('index')),
	array('label'=>'Create TransaksiPengeluaran', 'url'=>array('create')),
	array('label'=>'View TransaksiPengeluaran', 'url'=>array('view', 'id'=>$model->kode)),
	array('label'=>'Manage TransaksiPengeluaran', 'url'=>array('admin')),
);
?>

<h1>Update TransaksiPengeluaran <?php echo $model->kode; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>