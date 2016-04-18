<?php
/* @var $this PrestasiController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Prestasis',
);*/

$this->menu=array(
	array('label'=>'Buat Prestasi Santri', 'url'=>array('create')),
	
);
?>

<h1>Catatan Prestasi Santri</h1>

<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'prestasi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'no_pencatatan',
		'deskripsi',
		'jenis',
		'tanggal',
		'nip_santri',
		array(
			'class'=>'CButtonColumn',
		),
		
	),
)); ?>