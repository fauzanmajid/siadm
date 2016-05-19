<?php
/* @var $this PerwalianController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Perwalian',
);

$this->menu=array(
	array('label'=>'Create Perwalian', 'url'=>array('create')),
	array('label'=>'Manage Perwalian', 'url'=>array('admin')),
);
?>

<h1>Wali Santri</h1>

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
		),
	),
	'emptyText'=>'Tidak ada data yang ditemukan.'
)); ?>
