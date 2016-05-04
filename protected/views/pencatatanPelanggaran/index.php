<?php
/* @var $this PencatatanPelanggaranController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Pencatatan Pelanggaran',
);*/

$this->menu=array(
	array('label'=>'Tambah Pelanggaran Santri', 'url'=>array('create')),
);
Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$('#pencatatan-pelanggaran-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	$('.search-result').show();
	return false;
});
");
?>


<h1>Catatan Pelanggaran Santri</h1>

<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class='search-result' style="display:none">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pencatatan-pelanggaran-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'nip_santri',
		array(
	            'class' => 'CLinkColumn',
	            'labelExpression' => '$data->nipSantri->nama_lengkap',
	            'urlExpression' => 'Yii::app()->createUrl("santri/pelanggaran",array("id"=>$data->nip_santri))',
	            'header' => 'Nama Santri',
	            'htmlOptions' => array('style' => 'text-align: center; color : #6cac70;')
	        ),
		'id_kesiswaan',
		'deskripsi',
		array(
			       'header' => 'Menu',
				'class'=>'CButtonColumn',
				'template'=>'{update}{delete}',
				'deleteConfirmation'=>"js:'Anda yakin?'",
			),
		),
	)); ?>
</div>