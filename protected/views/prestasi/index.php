<?php
/* @var $this PrestasiController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Prestasis',
);*/

$this->menu=array(
	array('label'=>'Buat Prestasi Santri', 'url'=>array('create')),
	
);

Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$('#prestasi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	$('.search-result').show();
	return false;
});
");
?>

<h1>Catatan Prestasi Santri</h1>

<div class="search-form" >
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class='search-result' style="display:none">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'prestasi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'nip_santri',
		array(
	            'class' => 'CLinkColumn',
	            'labelExpression' => '$data->nipSantri->nama_lengkap',
	            'urlExpression' => 'Yii::app()->createUrl("santri/prestasi",array("id"=>$data->nip_santri))',
	            'header' => 'Nama Santri',
	            'htmlOptions' => array('style' => 'text-align: center; color : #6cac70;')
	        ),
		'deskripsi',
		'jenis',
		'tanggal',
		
		array(
	            'header' => 'Menu',
				'class'=>'CButtonColumn',
				'template'=>'{update}{delete}',
				'deleteConfirmation'=>"js:'Anda yakin?'",
			),
		),
	)); ?>
</div>