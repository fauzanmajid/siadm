<?php
/* @var $this PerizinanController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Perizinans',
);*/

$this->menu=array(
	array('label'=>'Buat Perizinan Santri', 'url'=>array('create')),
	
);
?>

<h1>Perizinan Santri</h1>
<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'perizinan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'no_izin',
		'deskripsi',
		'durasi',
		'tanggal_awal',
		'tanggal_akhir',
		'kategori',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>