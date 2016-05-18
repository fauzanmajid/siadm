<?php
/* @var $this PemasukkanBosController */
/* @var $model PemasukkanBos */

<<<<<<< HEAD
$this->breadcrumbs=array(
	'Pemasukkan Boses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PemasukkanBos', 'url'=>array('index')),
	array('label'=>'Create PemasukkanBos', 'url'=>array('create')),
);

=======

/*$this->breadcrumbs=array(
	'Pemasukkan Boses'=>array('index'),
	'Manage',
);*/

/*$this->menu=array(
	array('label'=>'List PemasukkanBos', 'url'=>array('index')),
	array('label'=>'Create PemasukkanBos', 'url'=>array('create')),
);*/
>>>>>>> master
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pemasukkan-bos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<<<<<<< HEAD
<h1>Manage Pemasukkan Boses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
=======

<h1>Atur Pemasukan BOS</h1>


<!-- <p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php echo CHtml::link('Pencarian Lanjutan','#',array('class'=>'search-button')); ?>
>>>>>>> master
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pemasukkan-bos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kode',
		'id_bendahara',
		'nominal',
<<<<<<< HEAD
=======
		'Tanggal',
		'Keterangan',
>>>>>>> master
		'timestamp',
		array(
			'class'=>'CButtonColumn',
		),
	),
<<<<<<< HEAD
=======
	'emptyText'=>'Tidak ada data yang ditemukan.'
>>>>>>> master
)); ?>
