<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */



?>

<h1>Daftar Pengguna</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<hr style="height:20px;border:none;color:#333;background-color:#333;" />

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$data->search(),
	'filter'=>$data,
	'columns'=>array(
		'id',
		'username',
		'password',
		'role',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>