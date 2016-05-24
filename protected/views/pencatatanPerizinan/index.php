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

<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<div class='search-result' style="display:none">

<div class='search-result'>
<?php $this->widget('zii.widgets.grid.CGridView', array(

	'id'=>'pencatatan-perizinan-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
			'nip_santri',
			array(
	            'class' => 'CLinkColumn',
	            'labelExpression' => '$data->nipSantri->nama_lengkap',
	            'urlExpression' => 'Yii::app()->createUrl("/santri/prestasi",array("id"=>$data->nip_santri))',
	            'header' => 'Nama Santri',
	            'htmlOptions' => array('style' => 'text-align: left; color : #6cac70;')
	        ),
			'deskripsi',
			'durasi',
			'tanggal_awal',
			'tanggal_akhir',
			'kategori',
			array(
	            'header' => 'Menu',
				'class'=>'CButtonColumn',
				'template'=>'{view}{update}{delete}',
				'deleteConfirmation'=>"js:'Apakah anda yakin ingin menghapus perizinan santri ini?'",
			),
		),
	));	//'emptyText'=>'Tidak ada data yang ditemukan.'
 ?>
</div>