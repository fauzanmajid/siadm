<?php
/* @var $this TransaksiPengeluaranController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Pengeluaran',
);

$this->menu=array(
	array('label'=>'Buat Pengeluaran', 'url'=>array('create')),
	array('label'=>'Kelola Pengeluaran', 'url'=>array('admin')),
);*/
?>

<h1>Transaksi Pengeluaran</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
