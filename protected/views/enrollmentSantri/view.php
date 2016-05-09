<?php
/* @var $this EnrollmentSantriController */
/* @var $model EnrollmentSantri */

$this->breadcrumbs=array(
	'Enrollment Santri'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Daftar Enrollment Santri', 'url'=>array('index')),
	array('label'=>'Buat Enrollment Santri', 'url'=>array('create')),
	array('label'=>'Sunting Enrollment Santri', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Hapus Enrollment Santri', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Kelola Enrollment Santri', 'url'=>array('admin')),
);
?>

<h1>Lihat Enrollment Santri <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nip_santri',
		'id_matpel',
		'nilai_harian',
		'nilai_uts',
		'nilai_uas',
		'nilai_akhir',
	),
)); ?>
