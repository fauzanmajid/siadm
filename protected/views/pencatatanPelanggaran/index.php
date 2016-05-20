<?php
/* @var $this PencatatanPelanggaranController */
/* @var $dataProvider CActiveDataProvider */

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

<h1>Pelanggaran Santri</h1>

<div class='search-result' style="display:none">

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pencatatan-pelanggaran-grid',
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
		'id_kesiswaan',
		'deskripsi',
		array(
			    'header' => 'Menu',
				'class'=>'CButtonColumn',
				'template'=>'{update}{delete}',
				'deleteConfirmation'=>"js:'Apakah anda yakin ingin menghapus pelanggaran santri ini?'",
			),
		),
	)
	//'emptyText'=>'Tidak ada data yang ditemukan.'
); ?>
</div>