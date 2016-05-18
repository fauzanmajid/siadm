<?php
/* @var $this EnrollmentSantriController */
/* @var $model EnrollmentSantri */

<<<<<<< HEAD
$this->breadcrumbs=array(
=======
/*$this->breadcrumbs=array(
>>>>>>> master
	'Enrollment Santri'=>array('index'),
	'Sunting',
);

$this->menu=array(
	array('label'=>'Daftar EnrollmentSantri', 'url'=>array('index')),
	array('label'=>'Buat EnrollmentSantri', 'url'=>array('create')),
<<<<<<< HEAD
);
=======
);*/
>>>>>>> master

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#enrollment-santri-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<<<<<<< HEAD
<h1>Sunting Enrollment Santri</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
=======
<h1>Atur Alokasi Santri</h1>



<?php echo CHtml::link('Pencarian Lanjutan','#',array('class'=>'search-button')); ?>
>>>>>>> master
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'enrollment-santri-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nip_santri',
		'id_matpel',
		'nilai_harian',
		'nilai_uts',
		'nilai_uas',
		/*
		'nilai_akhir',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
<<<<<<< HEAD
=======
	'emptyText'=>'Tidak ada data yang ditemukan.'
>>>>>>> master
)); ?>
