<?php
/* @var $this PemasukkanDonaturController */
/* @var $model PemasukkanDonatur */

?>

<h1>Lihat Pemasukan Donatur #<?php echo $model->kode; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode',
		'id_bendahara',
		'nominal',
		'tanggal',
		'keterangan',
		'timestamp',
		'id_donatur',
	),
)); ?>
