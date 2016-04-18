<?php
/* @var $this MataPelajaranController */
/* @var $model MataPelajaran */

$this->breadcrumbs=array(
	'Mata Pelajarans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Daftar Mata Pelajaran', 'url'=>array('index')),
	array('label'=>'Buat Mata Pelajaran', 'url'=>array('create')),
	array('label'=>'Atur Mata Pelajaran', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Hapus Mata Pelajaran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Anda yakin ingin menghapus data ini?')),
);
?>

<h1>Lihat MataPelajaran #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'jenjang',
	),
)); ?>
