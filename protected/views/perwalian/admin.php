<?php
/* @var $this PerwalianController */
/* @var $model Perwalian */

/*$this->breadcrumbs=array(
	'Perwalians'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Perwalian', 'url'=>array('index')),
	array('label'=>'Create Perwalian', 'url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#perwalian-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Atur Perwalian Santri</h1>

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
	'id'=>'perwalian-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nip_santri',
		'status',
		'nama',
		'tempat_lahir',
		'tanggal_lahir',
		/*
		'agama',
		'alamat',
		'no_telepon',
		'pekerjaan',
		'pendidikan',
		'penghasilan',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
	'emptyText'=>'Tidak ada data yang ditemukan.'
)); ?>
