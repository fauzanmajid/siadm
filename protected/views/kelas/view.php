<?php
/* @var $this KelasController */
/* @var $model Kelas */

<<<<<<< HEAD
$this->breadcrumbs=array(
=======
/*$this->breadcrumbs=array(
>>>>>>> master
	'Kelas'=>array('index'),
	$model->id,
);*/

<<<<<<< HEAD
$this->menu=array(
	array('label'=>'Daftar Kelas', 'url'=>array('index')),
	array('label'=>'Buat Kelas', 'url'=>array('create')),
	array('label'=>'Sunting Kelas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Hapus Kelas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Kelola Kelas', 'url'=>array('admin')),
);
=======
/*$this->menu=array(
	array('label'=>'Daftar Kelas', 'url'=>array('index')),
	array('label'=>'Buat Kelas', 'url'=>array('create')),
	array('label'=>'Atur Kelas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Hapus Kelas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Apakah anda yakin ingin menghapus kelas ini??')),
	array('label'=>'Kelola Kelas', 'url'=>array('admin')),
);*/
>>>>>>> master
?>

<h1>Lihat Kelas <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'jenjang',
	),
)); ?>
