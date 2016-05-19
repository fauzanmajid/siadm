<?php
<<<<<<< HEAD
=======

>>>>>>> master
Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$('#pemasukkan-bos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	$('.search-result').show();
	return false;
});
");
<<<<<<< HEAD
=======

<<<<<<< HEAD
<<<<<<< HEAD
$this->menu=array(
	array('label'=>'Buat Pemasukkan Bos', 'url'=>array('create')),
	// array('label'=>'Manage PemasukkanBos', 'url'=>array('admin')),
);

=======
>>>>>>> ef4fcbbfc6ca5e62fd0fbeb084ce966e1d8fcdb3

=======
>>>>>>> f5cfa5377e90676ea0786fe8dfe6ae4e173e19d5
>>>>>>> master
?>


<h1>Pemasukkan Bos</h1>

<<<<<<< HEAD
<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->



<div class='search-result' style="display:none">

=======
<input type=button onClick="location.href='http://localhost/siadm/index.php/pemasukkanBos/create'"value='Buat'>
>>>>>>> f5cfa5377e90676ea0786fe8dfe6ae4e173e19d5

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
>>>>>>> f5cfa5377e90676ea0786fe8dfe6ae4e173e19d5

