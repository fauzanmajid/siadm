<?php
Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$('#pemasukkan-bos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	$('.search-result').show();
	return false;
});
");
?>


<h1>Pemasukkan Bos</h1>

<<<<<<< HEAD




=======
>>>>>>> e283c1018289942129056fb71a391b5298f04942
<div class='search-result' >

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pemasukkan-bos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kode',
		'id_bendahara',
		'nominal',
		'Tanggal',
		'Keterangan',
		'deskripsi',
		'timestamp',
		array(
			'class'=>'CButtonColumn',
		),
	),
<<<<<<< HEAD
)); ?>
<input type=button onClick="location.href='http://localhost/siadm/index.php/pemasukkanBos/create'"value='Buat'>
	
=======
	'emptyText'=>'Tidak ada data yang ditemukan.'
)); ?>
</div>
<input type=button onClick="location.href='<?= Yii::app()->createUrl('pemasukkanbos/create')?>'" value='Buat'>
>>>>>>> e283c1018289942129056fb71a391b5298f04942
