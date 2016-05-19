<?php
/* @var $this PencatatanPerizinanController */
/* @var $dataProvider CActiveDataProvider */

/*$this->menu=array(
	array('label'=>'Buat Catatan Perizinan', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$('#perizinan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	$('.search-result').show();
	return false;
});
");
?>

<h1>Perizinan Santri</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pencatatan-perizinan-grid',
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
			'tanggal_awal',
			'tanggal_akhir',
			'kategori',
			array(
			'class'=>'CButtonColumn',
		),
	),
	'emptyText'=>'Tidak ada data yang ditemukan.'
)); ?>
</div>