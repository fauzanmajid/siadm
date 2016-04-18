<?php
/* @var $this PencatatanPelanggaranController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Pencatatan Pelanggaran',
);*/

$this->menu=array(
	array('label'=>'Tambah Pelanggaran Santri', 'url'=>array('create')),
);
?>

<h1>Catatan Pelanggaran Santri</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pencatatan-pelanggaran-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'No_pelanggaran',
		'nip_santri',
		'id_kesiswaan',
		array(
			'class'=>'CButtonColumn',
		),
	'emptyText'=>'Tidak ada data yang ditemukan.'
	),
)); ?>
