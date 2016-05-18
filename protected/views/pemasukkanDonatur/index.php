<?php
<<<<<<< HEAD
/* @var $this PemasukkanDonaturController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pemasukkan Donaturs',
);

$this->menu=array(
	array('label'=>'Create PemasukkanDonatur', 'url'=>array('create')),
	array('label'=>'Manage PemasukkanDonatur', 'url'=>array('admin')),
);
?>

<h1>Pemasukkan Donaturs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
=======
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

<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>

</div><!-- search-form -->

<div class='search-result' style="display:none;">

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
)); ?>
<input type=button onClick="location.href='http://localhost/siadm/index.php/pemasukkanDonatur/create'"value='Buat'>
>>>>>>> master
