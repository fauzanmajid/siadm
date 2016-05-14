<?php
/* @var $this RiwayatPenyakitController */
/* @var $dataProvider CActiveDataProvider */



/*$this->menu=array(
	array('label'=>'Buat Riwayat Penyakit', 'url'=>array('create')),
	
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$('#riwayat-penyakit-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	$('.search-result').show();
	return false;
});
");
?>

<h1>Riwayat Penyakit Santri</h1>

<?php /*echo CHtml::link('Advanced Search','#',array('class'=>'search-button'));*/ ?>
<div class="search-form" >
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class='search-result' style="display:none">
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'riwayat-penyakit-grid',
		'dataProvider'=>$model->search(),
		'columns'=>array(
			'nip_santri',
			array(
	            'class' => 'CLinkColumn',
	            'labelExpression' => '$data->nipSantri->nama_lengkap',
	            'urlExpression' => 'Yii::app()->createUrl("santri/riwayatPenyakit",array("id"=>$data->nip_santri))',
	            'header' => 'Nama Santri',
	            'htmlOptions' => array('style' => 'text-align: center; color : #6cac70;')
	        ),
			'nama_penyakit',
			'tanggal',
			array(
	            'header' => 'Menu',
				'class'=>'CButtonColumn',
				'template'=>'{update}{delete}',
				'deleteConfirmation'=>"js:'Apakah anda yakin ingin menghapus riwayat penyakit santri ini?'",
			),
		),
	));
	?>
</div>