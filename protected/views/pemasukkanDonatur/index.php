<?php
Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$('#pemasukkan-donatur-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	$('.search-result').show();
	return false;
});
");

?>
<h1>Pemasukkan Donatur</h1>

<input type=button onClick="location.href='http://localhost/siadm/index.php/pemasukkanDonatur/create'"value='Buat'>
<div class="search-result" >
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pemasukkan-donatur-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kode',
		'id_bendahara',
		'nominal',
		'tanggal',
		'keterangan',
		'timestamp',
		'id_donatur',
		array(
			'class'=>'CButtonColumn',
		),
	),
	'emptyText'=>'Tidak ada data yang ditemukan.'
)); ?>
</div>

