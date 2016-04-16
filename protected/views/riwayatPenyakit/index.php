<?php
/* @var $this RiwayatPenyakitController */
/* @var $dataProvider CActiveDataProvider */



$this->menu=array(
	array('label'=>'Buat Riwayat Penyakit', 'url'=>array('create')),
	
);

/*Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#riwayat-penyakit-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");*/
?>

<h1>Riwayat Penyakit</h1>

<?php /*echo CHtml::link('Advanced Search','#',array('class'=>'search-button'));*/ ?>
<div class="search-form" >
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'riwayat-penyakit-grid',
	'dataProvider'=>$model->search(),
	
	'columns'=>array(
		'no_pencatatan',
		'nip_santri',
		array(
            'class' => 'CLinkColumn',
            'labelExpression' => '$data->nama_penyakit',
            'urlExpression' => 'Yii::app()->createUrl("RiwayatPenyakit/view",array("id"=>$data->no_pencatatan))',
            'header' => 'Nama Penyakit',
            'htmlOptions' => array('style' => 'text-align: center; color : #6cac70;')
        ),
		'tanggal',
		array(
            'header' => 'Action',
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
			'deleteConfirmation'=>"js:'Anda yakin?'",
		),
	),
)); ?>