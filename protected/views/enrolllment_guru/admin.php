<?php
/* @var $this Enrolllment_GuruController */
/* @var $model Enrolllment_Guru */

<<<<<<< HEAD
<<<<<<< HEAD
$this->breadcrumbs=array(
=======
/*$this->breadcrumbs=array(
>>>>>>> master
=======
/*$this->breadcrumbs=array(
>>>>>>> master
	'Enrollment  Guru'=>array('index'),
	'Sunting',
);

$this->menu=array(
	array('label'=>'Daftar Enrolllment_Guru', 'url'=>array('index')),
	array('label'=>'Buat Enrolllment_Guru', 'url'=>array('create')),
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
	$('#enrolllment--guru-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<<<<<<< HEAD
<<<<<<< HEAD
<h1>Sunting Enrollment  Guru</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
=======
<h1>Atur Alokasi Guru</h1>

<?php echo CHtml::link('Pencarian Lanjutan','#',array('class'=>'search-button')); ?>
>>>>>>> master
=======
<h1>Atur Alokasi Guru</h1>

<?php echo CHtml::link('Pencarian Lanjutan','#',array('class'=>'search-button')); ?>
>>>>>>> master
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'enrolllment--guru-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_guru',
		'id_matpel',
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
