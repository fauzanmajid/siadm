<?php
/* @var $this SantriController */
/* @var $model Santri */

$this->breadcrumbs=array(
	'Santris'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Santri', 'url'=>array('index')),
	array('label'=>'Create Santri', 'url'=>array('create')),
);

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

<h1>Manage Santris</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
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
		'nip',
		'nis',
		'nik',
		'nisn',
		'nama_lengkap',
		'nama_kecil',
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
)); ?>
