<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */


$this->breadcrumbs=array(
	'Pengguna',
);

$this->menu=array(
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
/*$this->breadcrumbs=array(
	'Users',
);*/

/*$this->menu=array(
	array('label'=>'Tambah Pengguna', 'url'=>array('create')),
	array('label'=>'Atur Pengguna', 'url'=>array('admin')),
<<<<<<< HEAD
	/*array('label'=>'Manage User', 'url'=>array('admin')),*/
/*
);

=======
	array('label'=>'Manage User', 'url'=>array('admin')),
);>>>>>>> dfe1f6a035285843cae34273fb4653b1404ebf28
?>*/


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