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

<h1>Pemasukkan Santri</h1>

<<<<<<< HEAD
<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class='search-result' style="display:none">

=======
<input type=button onClick="location.href='http://localhost/siadm/index.php/pemasukkanSantri/create'"value='Buat'>
<div class="search-result" >
>>>>>>> f5cfa5377e90676ea0786fe8dfe6ae4e173e19d5
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pemasukkan-santri-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kode',
		'id_bendahara',
		'nip_santri',
		'nominal',
		'tanggal',
		'keterangan',
		'timestamp',
		array(
			'class'=>'CButtonColumn',
		),
	),
<<<<<<< HEAD
)); ?>
<input type=button onClick="location.href='http://localhost/siadm/index.php/pemasukkanSantri/create'"value='Buat'>
=======
	'emptyText'=>'Tidak ada data yang ditemukan.'
)); ?>
</div>
>>>>>>> f5cfa5377e90676ea0786fe8dfe6ae4e173e19d5
