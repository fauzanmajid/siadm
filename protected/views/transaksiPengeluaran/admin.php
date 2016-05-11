<?php
/* @var $this TransaksiPengeluaranController */
/* @var $model TransaksiPengeluaran */

// $this->breadcrumbs=array(
// 	'Pengeluaran'=>array('index'),
// 	'Kelola',
// );

// $this->menu=array(
// 	array('label'=>'Daftar Pengeluaran', 'url'=>array('index')),
// 	array('label'=>'Buat Pengeluaran', 'url'=>array('create')),
// );

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#transaksi-pengeluaran-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Kelola Pengeluaran</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'transaksi-pengeluaran-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kode',
		'id_bendahara',
		'nominal',
		'Deskripsi',
		'tanggal_pengeluaran',
		'timestamp',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
