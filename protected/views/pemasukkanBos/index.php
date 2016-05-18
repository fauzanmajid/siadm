<?php
<<<<<<< HEAD
/* @var $this PemasukkanBosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pemasukkan Boses',
);

$this->menu=array(
	array('label'=>'Create PemasukkanBos', 'url'=>array('create')),
	array('label'=>'Manage PemasukkanBos', 'url'=>array('admin')),
);
?>

<h1>Pemasukkan Boses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
=======

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
$this->menu=array(
	array('label'=>'Buat Pemasukkan Bos', 'url'=>array('create')),
	// array('label'=>'Manage PemasukkanBos', 'url'=>array('admin')),
);

=======
>>>>>>> ef4fcbbfc6ca5e62fd0fbeb084ce966e1d8fcdb3

?>


<h1>Pemasukkan Bos</h1>

<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<input type=button onClick="location.href='http://localhost/siadm/index.php/pemasukkanBos/create'" value='click here'>

<div class='search-result' style="display:none">


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
)); ?>
<input type=button onClick="location.href='http://localhost/siadm/index.php/pemasukkanBos/create'"value='Buat'>

>>>>>>> master
