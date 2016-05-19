<?php
/* @var $this PencatatanPelanggaranController */
/* @var $model PencatatanPelanggaran */

?>

<h1>Lihat Pelanggaran Santri <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nip_santri',
		'id_kesiswaan',
		'deskripsi',
	),
)); ?>
