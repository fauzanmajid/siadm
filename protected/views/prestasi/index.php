<?php
/* @var $this PrestasiController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Prestasis',
);*/


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

<h1>Prestasi Santri</h1>


<div class='search-result'>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'prestasi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'nip_santri',
		
		array(
	            //'class' => 'CLinkColumn',

	            'value' => '$data->nipSantri->nama_lengkap',
	            //'urlExpression' => 'Yii::app()->createUrl("santri/prestasi",array("id"=>$data->nip_santri))',
	            'header' => 'Nama Santri',
	            //'htmlOptions' => array('style' => 'text-align: center; color : #6cac70;')
	        ),
	    'deskripsi',
		'jenis',
		'tanggal',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
	'emptyText'=>'Tidak ada data yang ditemukan.'
)); ?>
</div>