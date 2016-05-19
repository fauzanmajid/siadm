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


<div class='search-result'>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'riwayat-penyakit-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			'no_pencatatan',
			'nip_santri',
			array(
	            //'class' => 'CLinkColumn',

	            'value' => '$data->nipSantri->nama_lengkap',
	            //'urlExpression' => 'Yii::app()->createUrl("santri/riwayatpenyakit",array("id"=>$data->nip_santri))',
	            'header' => 'Nama Santri',
	            //'htmlOptions' => array('style' => 'text-align: center; color : #6cac70;')
	        ),
			'nama_penyakit',
			'tanggal',
			array(
			'class'=>'CButtonColumn',
		),
	),
	'emptyText'=>'Tidak ada data yang ditemukan.'
)); ?>
</div>