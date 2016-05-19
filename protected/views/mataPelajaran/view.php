<?php
/* @var $this MataPelajaranController */
/* @var $model MataPelajaran */

?>

<h1>Lihat Mata Pelajaran #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'jenjang',
	),
)); ?>
