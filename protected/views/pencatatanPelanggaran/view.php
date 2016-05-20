<?php
/* @var $this PencatatanPelanggaranController */
/* @var $model PencatatanPelanggaran */

/*$this->breadcrumbs=array(
	'Pencatatan Pelanggarans'=>array('index'),
	$model->id,
);*/

/*$this->menu=array(
	array('label'=>'Daftar Pelanggaran Santri', 'url'=>array('index')),
	array('label'=>'Buat Pelanggaran Santri', 'url'=>array('create')),
	array('label'=>'Atur Pelanggaran Santri', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Hapus Pelanggaran Santri', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Apakah anda yakin ingin menghapus pelanggaran santri ini?')),
);*/
?>

<<<<<<< HEAD
<h1>Lihat Pelanggaran Santri #<?php echo $model->id; ?></h1>
=======
<h1>Lihat Pelanggaran Santri <?php echo $model->id; ?></h1>
>>>>>>> f5cfa5377e90676ea0786fe8dfe6ae4e173e19d5

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nip_santri',
		'id_kesiswaan',
		'deskripsi',
	),
)); ?>
