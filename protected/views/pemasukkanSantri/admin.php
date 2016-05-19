<?php
/* @var $this PemasukkanSantriController */
/* @var $model PemasukkanSantri */

<<<<<<< HEAD
<<<<<<< HEAD
$this->breadcrumbs=array(
=======
/*$this->breadcrumbs=array(
>>>>>>> master
=======
/*$this->breadcrumbs=array(
>>>>>>> master
	'Pemasukkan Santris'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PemasukkanSantri', 'url'=>array('index')),
	array('label'=>'Create PemasukkanSantri', 'url'=>array('create')),
<<<<<<< HEAD
<<<<<<< HEAD
);
=======
);*/
>>>>>>> master
=======
);*/
>>>>>>> master

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pemasukkan-santri-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<<<<<<< HEAD
<<<<<<< HEAD
<h1>Manage Pemasukkan Santris</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
=======
=======
>>>>>>> master
<h1>Atur Pemasukan Santri</h1>

<!-- <p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php echo CHtml::link('Pencarian Lanjutan','#',array('class'=>'search-button')); ?>
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> master
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pemasukkan-santri-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kode',
		'id_bendahara',
		'nip_santri',
		'nominal',
<<<<<<< HEAD
<<<<<<< HEAD
=======
		'tanggal',
		'keterangan',
>>>>>>> master
=======
		'tanggal',
		'keterangan',
>>>>>>> master
		'timestamp',
		array(
			'class'=>'CButtonColumn',
		),
	),
<<<<<<< HEAD
<<<<<<< HEAD
=======
	'emptyText'=>'Tidak ada data yang ditemukan.'
>>>>>>> master
=======
	'emptyText'=>'Tidak ada data yang ditemukan.'
>>>>>>> master
)); ?>
