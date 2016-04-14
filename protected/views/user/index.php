<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */


$this->breadcrumbs=array(
	'Pengguna',
);

$this->menu=array(
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Manage User', 'url'=>array('admin')),

/*$this->breadcrumbs=array(
	'Users',
);*/

$this->menu=array(
	array('label'=>'Tambah Pengguna', 'url'=>array('create')),
	array('label'=>'Atur Pengguna', 'url'=>array('admin')),
	/*array('label'=>'Manage User', 'url'=>array('admin')),*/
>>>>>>> 4c83fff4eb298e4fcd2654eb0fa38ade2caf8093
);

?>


<h1>Daftar Pengguna</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>