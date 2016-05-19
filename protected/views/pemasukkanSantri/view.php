<?php
/* @var $this PemasukkanSantriController */
/* @var $model PemasukkanSantri */

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
$this->breadcrumbs=array(
	'Pemasukkan Santris'=>array('index'),
=======
=======
>>>>>>> master
=======
>>>>>>> master

<<<<<<< HEAD
/*$this->breadcrumbs=array(
	'Pemasukkan Santris'=>array('index'),
>>>>>>> parput
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> master
=======
>>>>>>> master
	$model->kode,
);

$this->menu=array(
	array('label'=>'List PemasukkanSantri', 'url'=>array('index')),
	array('label'=>'Create PemasukkanSantri', 'url'=>array('create')),
	array('label'=>'Update PemasukkanSantri', 'url'=>array('update', 'id'=>$model->kode)),
	array('label'=>'Delete PemasukkanSantri', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PemasukkanSantri', 'url'=>array('admin')),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> master
);*/
=======
$this->breadcrumbs=array(
	'Pemasukkan Santri'=>array('index'),

	$model->kode,
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> master
);

// $this->menu=array(
// 	array('label'=>'List PemasukkanSantri', 'url'=>array('index')),
// 	array('label'=>'Create PemasukkanSantri', 'url'=>array('create')),
// 	array('label'=>'Update PemasukkanSantri', 'url'=>array('update', 'id'=>$model->kode)),
// 	array('label'=>'Delete PemasukkanSantri', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage PemasukkanSantri', 'url'=>array('admin')),
// );
>>>>>>> f5cfa5377e90676ea0786fe8dfe6ae4e173e19d5
?>

<h1>Lihat Pemasukan Santri #<?php echo $model->kode; ?></h1>
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> master
=======
>>>>>>> master

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode',
		'id_bendahara',
		'nip_santri',
		'nominal',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
		'tanggal',
		'keterangan',
>>>>>>> master
=======
		'tanggal',
		'keterangan',
>>>>>>> master
=======
		'tanggal',
		'keterangan',
>>>>>>> master
		'timestamp',
	),
)); ?>
