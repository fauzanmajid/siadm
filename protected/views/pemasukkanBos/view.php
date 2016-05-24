<?php
/* @var $this PemasukkanBosController */
/* @var $model PemasukkanBos */

?>


<h1>Lhat Pemasukan BOS #<?php echo $model->kode; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode',
		'id_bendahara',
		'Tanggal',
		'Keterangan',
		'nominal',
		'timestamp',
		
	),
)); ?>
