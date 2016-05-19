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

<h1>Lihat Penilaian Santri <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idkelas',
		'idmatpel',
		'idguru',
		
	),
)); ?>
<div class='search-result' >

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'penilaian-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'nip_santri',
		'nilai_harian',
		'nilai_uts',
		'nilai_uas',
		'nilai_akhir',
		array(
			 'header' => 'Action',
			'class'=>'CButtonColumn',
		),
		),
	)); ?>
</div>
