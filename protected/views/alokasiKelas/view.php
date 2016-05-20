<?php
/* @var $this PencatatanPelanggaranController */
/* @var $model PencatatanPelanggaran */

/*$this->breadcrumbs=array(
	'Pencatatan Pelanggarans'=>array('index'),
	$model->id,
);*/

$this->menu=array(
	array('label'=>'Daftar Alokasi', 'url'=>array('index')),
	array('label'=>'Buat Alokasi', 'url'=>array('create')),
	array('label'=>'Atur Alokasi', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Hapus Alokasi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Apakah anda yakin ingin menghapus pelanggaran santri ini?')),
	/*array('label'=>'Manage PencatatanPelanggaran', 'url'=>array('admin')),*/
);
?>

<h1>View Alokasi #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idkelas',
		'idmatpel',
		'idguru',
	),
)); ?>
