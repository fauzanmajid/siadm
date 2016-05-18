<?php
/* @var $this TransaksiPengeluaranController */
/* @var $model TransaksiPengeluaran */

/*$this->breadcrumbs=array(
	'Transaksi Pengeluarans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TransaksiPengeluaran', 'url'=>array('index')),
	array('label'=>'Manage TransaksiPengeluaran', 'url'=>array('admin')),
);*/
?>

<h1>Buat Transaksi Pengeluaran</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>