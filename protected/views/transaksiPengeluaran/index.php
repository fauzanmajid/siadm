<?php
/* @var $this TransaksiPengeluaranController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Transaksi Pengeluarans',
);

$this->menu=array(
	array('label'=>'Create TransaksiPengeluaran', 'url'=>array('create')),
	array('label'=>'Manage TransaksiPengeluaran', 'url'=>array('admin')),
);
?>

<h1>Transaksi Pengeluarans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
