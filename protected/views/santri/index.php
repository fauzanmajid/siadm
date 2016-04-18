<?php
/* @var $this SantriController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'Tambah Data Santri', 'url'=>array('create')),
//	array('label'=>'Atur Data Santri', 'url'=>array('admin')),
);
?>

<div class="search-form" >
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'santri-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'nip',
		'nama_lengkap',
		'jenjang',
		/*
		'status',
		'alamat',
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
)); ?>
