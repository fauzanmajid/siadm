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

$this->menu=array(
	array('label'=>'Buat Pengeluaran', 'url'=>array('create')),
	// array('label'=>'Kelola Pengeluaran', 'url'=>array('admin')),
);
?>

<h1>Pengeluaran</h1>

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
