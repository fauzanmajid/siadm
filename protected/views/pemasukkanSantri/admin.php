<?php
/* @var $this PemasukkanSantriController */
/* @var $model PemasukkanSantri */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pemasukkan-santri-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<h1>Atur Pemasukan Santri</h1>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

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
	'emptyText'=>'Tidak ada data yang ditemukan.'
)); ?>
