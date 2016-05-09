<?php
/* @var $this Enrollment_PelajaranController */
/* @var $model Enrollment_Pelajaran */

$this->breadcrumbs=array(
	'Enrollment  Pelajarans'=>array('index'),
	'Sunting',
);

$this->menu=array(
	array('label'=>'Daftar Enrollment Pelajaran', 'url'=>array('index')),
	array('label'=>'Buat Enrollment Pelajaran', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#enrollment--pelajaran-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Sunting Enrollment  Pelajaran</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'enrollment--pelajaran-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_kelas',
		'id_matpel',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
