<?php
Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$('#transaksi-pengeluaran-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	$('.search-result').show();
	return false;
});
");

<<<<<<< HEAD
<<<<<<< HEAD
$this->breadcrumbs=array(
	'Pengeluaran',
);

$this->menu=array(
	array('label'=>'Buat Pengeluaran', 'url'=>array('create')),
	array('label'=>'Kelola Pengeluaran', 'url'=>array('admin')),
);
?>

<h1>Pengeluaran</h1>
=======
=======
>>>>>>> master

?>

<h1>Transaksi Pengeluaran</h1>
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> master

<<<<<<< HEAD
<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class='search-result' style="display:none">

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
</div>

<input type=button onClick="location.href='http://localhost/siadm/index.php/transaksiPengeluaran/create'"value='Buat'>
=======
<input type=button onClick="location.href='http://localhost/siadm/index.php/transaksiPengeluaran/create'"value='Buat'>

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
	'emptyText'=>'Tidak ada data yang ditemukan.'
)); ?>
</div>


>>>>>>> f5cfa5377e90676ea0786fe8dfe6ae4e173e19d5
