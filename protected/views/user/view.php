<?php
/* @var $this UserController */
/* @var $model User */

?>

<h1>Lihat Pengguna <?php echo $model->username; ?> (<?php echo $model->role; ?>)</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'role',

	),
)); ?>
