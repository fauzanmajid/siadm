<?php
/* @var $this PerwalianController */
/* @var $model Perwalian */
?>

<h1>Lihat Wali Santri <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nip_santri',
		'status',
		'nama',
		'tempat_lahir',
		'tanggal_lahir',
		'agama',
		'alamat',
		'no_telepon',
		'pekerjaan',
		'pendidikan',
		'penghasilan',
	),
)); ?>
