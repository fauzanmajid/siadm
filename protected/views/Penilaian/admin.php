<?php
/* @var $this PencatatanPelanggaranController */
/* @var $model PencatatanPelanggaran */

/*$this->breadcrumbs=array(
	'Pencatatan Pelanggarans'=>array('index'),
	'Manage',
);*/
/*
$this->menu=array(
	array('label'=>'Daftar Pelanggaran Santri', 'url'=>array('index')),
	array('label'=>'Buat Pelanggaran Santri', 'url'=>array('create')),
);
*/
?>

<h1>Atur Penilaian Santri</h1>

<!-- <p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->


<div class='search-result' >

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'penilaian-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'idkelas',
		'idmatpel',
		'idguru',
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

