<?php
/* @var $this TahunAjaranController */
/* @var $model TahunAjaran */

/*$this->breadcrumbs=array(
	'Tahun Ajarans'=>array('index'),
	$model->id,
);*/

/*$this->menu=array(
	array('label'=>'Daftar Tahun Ajaran', 'url'=>array('index')),
	array('label'=>'Buat Tahun Ajaran', 'url'=>array('create')),
	array('label'=>'Atur Tahun Ajaran', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Hapus Tahun Ajaran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Apakah anda yakin ingin menghapus tahun ajaran ini?')),
);*/
?>

<h1>Lihat Tahun Ajaran #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tahun_ajaran',
		'id_matpel',
	),
)); ?>
