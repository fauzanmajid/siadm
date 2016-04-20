<?php
/* @var $this PerizinanController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Perizinans',
);*/

$this->menu=array(
	array('label'=>'Buat Perizinan Santri', 'url'=>array('create')),
	
);

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

<h1>Perizinan Santri</h1>

<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class='search-result' style="display:none">
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'perizinan-grid',
		'dataProvider'=>$model->search(),
		'columns'=>array(
			'no_izin',
			'nip_santri',
			'deskripsi',
			'tanggal_awal',
			'tanggal_akhir',
			'kategori',
			array(
	            'header' => 'Menu',
				'class'=>'CButtonColumn',
				'template'=>'{update}{delete}',
				'deleteConfirmation'=>"js:'Anda yakin?'",
			),
		),
	)); ?>
</div>