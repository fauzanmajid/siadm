<?php
/* @var $this Enrolllment_GuruController */
/* @var $model Enrolllment_Guru */

/*$this->breadcrumbs=array(
	'Enrollment  Guru'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Daftar Enrollment Guru', 'url'=>array('index')),
	array('label'=>'Buat Enrollment Guru', 'url'=>array('create')),
	array('label'=>'Sunting Enrollment Guru', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Hapus Enrollment Guru', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Kelola Enrollment Guru', 'url'=>array('admin')),
);*/
?>

<h1>Lihat Alokasi Guru <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_guru',
		'id_matpel',
	),
)); ?>
