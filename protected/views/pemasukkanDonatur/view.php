<?php
/* @var $this PemasukkanDonaturController */
/* @var $model PemasukkanDonatur */

$this->breadcrumbs=array(
<<<<<<< HEAD
<<<<<<< HEAD
	'Pemasukkan Donaturs'=>array('index'),
	$model->kode,
);

$this->menu=array(
=======
=======
>>>>>>> master
	'Pemasukkan Donatur'=>array('index'),
	$model->kode,
);

/*$this->menu=array(
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> master
	array('label'=>'List PemasukkanDonatur', 'url'=>array('index')),
	array('label'=>'Create PemasukkanDonatur', 'url'=>array('create')),
	array('label'=>'Update PemasukkanDonatur', 'url'=>array('update', 'id'=>$model->kode)),
	array('label'=>'Delete PemasukkanDonatur', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PemasukkanDonatur', 'url'=>array('admin')),
<<<<<<< HEAD
<<<<<<< HEAD
);
?>

<h1>View PemasukkanDonatur #<?php echo $model->kode; ?></h1>
=======
=======
>>>>>>> master
);*/
?>

<h1>Lihat Pemasukan Donatur #<?php echo $model->kode; ?></h1>
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> master

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode',
		'id_bendahara',
		'nominal',
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
		'timestamp',
		'id_donatur',
	),
)); ?>
