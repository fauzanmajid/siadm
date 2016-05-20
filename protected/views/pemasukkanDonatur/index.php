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

<<<<<<< HEAD


</div><!-- search-form -->

<div class='search-result'>
=======

>>>>>>> e283c1018289942129056fb71a391b5298f04942

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
		'id_donatur',
		array(
			'class'=>'CButtonColumn',
		),
	),
	'emptyText'=>'Tidak ada data yang ditemukan.'
)); ?> 

</div>

<input type=button onClick="location.href='<?= Yii::app()->createUrl('pemasukkandonatur/create')?>'" value='Buat'>