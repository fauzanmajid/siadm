<?php
/* @var $this PemasukkanSantriController */
/* @var $model PemasukkanSantri */


?>

<h1>Lihat Pemasukan Santri #<?php echo $model->kode; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode',
		'id_bendahara',
		'nip_santri',
		'nominal',
		'tanggal',
		'keterangan',
		'timestamp',
	),
)); ?>
