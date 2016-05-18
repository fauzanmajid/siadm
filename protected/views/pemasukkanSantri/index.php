<?php
<<<<<<< HEAD
/* @var $this PemasukkanSantriController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pemasukkan Santris',
);

$this->menu=array(
	array('label'=>'Create PemasukkanSantri', 'url'=>array('create')),
	array('label'=>'Manage PemasukkanSantri', 'url'=>array('admin')),
);
?>

<h1>Pemasukkan Santris</h1>

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

<h1>Pemasukkan Santri</h1>

<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class='search-result' style="display:none">

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
)); ?>
<input type=button onClick="location.href='http://localhost/siadm/index.php/pemasukkanSantri/create'"value='Buat'>
>>>>>>> master
