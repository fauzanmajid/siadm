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

$this->menu=array(
	array('label'=>'Buat Pemasukkan Bos', 'url'=>array('create')),
	// array('label'=>'Manage PemasukkanBos', 'url'=>array('admin')),
);
?>

<h1>Pemasukkan Bos</h1>

<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class='search-result' style="display:none">

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pemasukkan-bos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kode',
		'id_bendahara',
		'nominal',
		'timestamp',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

