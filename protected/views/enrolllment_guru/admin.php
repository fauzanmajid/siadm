<?php
/* @var $this Enrolllment_GuruController */
/* @var $model Enrolllment_Guru */

$this->breadcrumbs=array(
	'Enrollment  Guru'=>array('index'),
	'Sunting',
);

$this->menu=array(
	array('label'=>'Daftar Enrolllment_Guru', 'url'=>array('index')),
	array('label'=>'Buat Enrolllment_Guru', 'url'=>array('create')),
);

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

<h1>Sunting Enrollment  Guru</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
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
)); ?>
