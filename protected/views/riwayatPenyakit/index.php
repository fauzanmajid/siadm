<?php
/* @var $this RiwayatPenyakitController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Riwayat Penyakits',
);

$this->menu=array(
	array('label'=>'Create RiwayatPenyakit', 'url'=>array('create')),
	array('label'=>'Manage RiwayatPenyakit', 'url'=>array('admin')),
);

/*Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#riwayat-penyakit-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");*/
?>

<h1>Riwayat Penyakit</h1>

<?php /*echo CHtml::link('Advanced Search','#',array('class'=>'search-button'));*/ ?>
<div class="search-form" >
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
