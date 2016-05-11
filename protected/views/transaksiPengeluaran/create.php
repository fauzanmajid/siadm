<?php
/* @var $this TransaksiPengeluaranController */
/* @var $model TransaksiPengeluaran */

$this->breadcrumbs=array(
	'Pengeluaran'=>array('index'),
	'Buat',
);

// $this->menu=array(
// 	array('label'=>'Daftar Pengeluaran', 'url'=>array('index')),
// 	array('label'=>'Kelola Pengeluaran', 'url'=>array('admin')),
// );
?>

<h1>Buat Pengeluaran</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>