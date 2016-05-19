<?php
/* @var $this KelasController */
/* @var $model Kelas */


?>

<h1>Lihat Kelas <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'jenjang',
	),
)); ?>
