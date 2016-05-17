<?php
/* @var $this PencatatanPerizinanController */
/* @var $dataProvider CActiveDataProvider */

/*$this->menu=array(
	array('label'=>'Buat Catatan Perizinan', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('searchIzin', "
$('.search-form form').submit(function(){
	$('#cari-absensi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	$('.search-result').show();
	return false;
});
");
?>

<h1>Perizinan Santri</h1>

<div class="search-form">
<?php $this->renderPartial('form-cari-absensi',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<div class='search-result' style="display:none">


<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'cari-absensi-grid',
		'dataProvider'=>$model->searchIzin(),
		'columns'=>array(
			'nip_santri',
			array(
	            'class' => 'CLinkColumn',
	            'labelExpression' => '$data->nipSantri->nama_lengkap',
	            'urlExpression' => 'Yii::app()->createUrl("santri/perizinan",array("id"=>$data->nip_santri))',
	            'header' => 'Nama Santri',
	            'htmlOptions' => array('style' => 'text-align: center; color : #6cac70;')
	        ),
			'deskripsi',
			'tanggal_awal',
			'tanggal_akhir',
			'kategori',
			array(
	            'header' => 'Menu',
				'class'=>'CButtonColumn',
				'template'=>'{update}{delete}',
				'deleteConfirmation'=>"js:'Apakah anda yakin ingin menghapus perizinan santri ini?'",
			),
		),
	

)); ?>
</div>
