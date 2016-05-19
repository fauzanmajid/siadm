<?php
/* @var $this PerwalianController */
/* @var $dataProvider CActiveDataProvider */

<<<<<<< HEAD
$this->breadcrumbs=array(
	'Perwalian',
);

$this->menu=array(
	array('label'=>'Create Perwalian', 'url'=>array('create')),
	array('label'=>'Manage Perwalian', 'url'=>array('admin')),
);
?>

=======
?>
>>>>>>> master
<h1>Wali Santri</h1>

<<<<<<< HEAD
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
=======
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
>>>>>>> f5cfa5377e90676ea0786fe8dfe6ae4e173e19d5
