<?php
/* @var $this KelasController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Kelas',
);

$this->menu=array(
	array('label'=>'Buat Kelas', 'url'=>array('create')),
	array('label'=>'Sunting Kelas', 'url'=>array('admin')),
);*/
?>

<h1>Kelas</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'kelas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama',
		'jenjang',
		array(
			'class'=>'CButtonColumn',
		),
	),
	'emptyText'=>'Tidak ada data yang ditemukan.'
)); ?>
