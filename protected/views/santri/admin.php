<?php
/* @var $this SantriController */
/* @var $model Santri */

/*$this->breadcrumbs=array(
	'Data Santri'=>array('index'),
	'Atur Data Santri',
);

$this->menu=array(
	array('label'=>'Daftar Santri', 'url'=>array('index')),
	array('label'=>'Buat Data Santri', 'url'=>array('create')),
);
*/
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#santri-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Atur Data Santri</h1>

<!-- <p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php echo CHtml::link('Pencarian Lanjutan','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'santri-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(

		'nis',
	
		'nama_lengkap',
	
		/*
		'status',
		'alamat',
		'jenjang',
		'tempat_lahir',
		'tanggal_lahir',
		'golongan_darah',
		'anak_ke',
		'jum_saudara',
		'Perwalian_nip_santri',
		'Perwalian_status',
		'Pemasukkan_santri_kode',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	
	),
	'emptyText'=>'Tidak ada data yang ditemukan.'
)); ?>
