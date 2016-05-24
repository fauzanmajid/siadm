<?php
/* @var $this SantriController */
/* @var $dataProvider CActiveDataProvider */
/*
$this->menu=array(
	array('label'=>'Buat Data Santri', 'url'=>array('create')),
//	array('label'=>'Atur Data Santri', 'url'=>array('admin')),
);
*/
?>

<h1>Data Santri</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'santri-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(

		'nis',
	
		'nama_lengkap',
	
		/*
		'status',
		'alamat',
		'jenjang',
		'tempat_lahir',
		'tanggal_lahir',
		'golongan_darah',
		'anak_ke',
		'jum_saudara',
		'Perwalian_nip_santri',
		'Perwalian_status',
		'Pemasukkan_santri_kode',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	
	),
	'emptyText'=>'Tidak ada data yang ditemukan.'
)); ?>