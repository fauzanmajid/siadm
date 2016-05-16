<?php
/* @var $this PerwalianController */
/* @var $model Perwalian */

// $this->breadcrumbs=array(
// 	'Perwalian'=>array('index'),
// 	'',
// );


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

<h1>Kelola Wali Santri</h1>


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
		// 'status',
		'nama',
		// 'tempat_lahir',
		// 'tanggal_lahir',
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
			 'template'=>'{view}{update}',
		),
	),
)); ?>
<!--  -->