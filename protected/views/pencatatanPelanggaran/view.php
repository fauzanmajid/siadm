<?php
/* @var $this PencatatanPelanggaranController */
/* @var $model PencatatanPelanggaran */

/*$this->breadcrumbs=array(
	'Pencatatan Pelanggarans'=>array('index'),
	$model->id,
);*/

$this->menu=array(
	array('label'=>'Daftar Pelanggaran Santri', 'url'=>array('index')),
	array('label'=>'Tambah Pelanggaran Santri', 'url'=>array('create')),
	array('label'=>'Atur Pelanggaran Santri', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Hapus Pelanggaran Santri', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Apakah anda yakin ingin menghapus pelanggaran santri ini?')),
	/*array('label'=>'Manage PencatatanPelanggaran', 'url'=>array('admin')),*/
);
?>

<h1>View PencatatanPelanggaran #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'No_pelanggaran',
		'nip_santri',
		'id_kesiswaan',
	),
)); ?>
