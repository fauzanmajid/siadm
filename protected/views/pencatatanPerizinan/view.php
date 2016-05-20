<?php
/* @var $this PencatatanPerizinanController */
/* @var $model PencatatanPerizinan */

/*$this->breadcrumbs=array(
	'Pencatatan Perizinans'=>array('index'),
	$model->pencatatan_perizinan,
);*/

/*$this->menu=array(
	array('label'=>'Daftar Perizinan', 'url'=>array('index')),
	array('label'=>'Buat Catatan Perizinan', 'url'=>array('create')),
	array('label'=>'Atur Catatan Perizinan', 'url'=>array('update', 'id'=>$model->pencatatan_perizinan)),
	array('label'=>'Hapus Catatan Perizinan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pencatatan_perizinan),'confirm'=>'Anda yakin?')),
);*/
?>

<h1>Lihat Perizinan Santri <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nip_santri',
		'id_kesiswaan',
		'deskripsi',
		'durasi',
		'tanggal_awal',
		'tanggal_akhir',
		'kategori',
	),
)); ?>
