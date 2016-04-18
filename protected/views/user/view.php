<?php
/* @var $this UserController */
/* @var $model User */


/*$this->breadcrumbs=array(
	'Pengguna'=>array('index'),
	$model->username,
);*/

/*$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);*/

$this->menu=array(
	array('label'=>'Daftar Pengguna', 'url'=>array('index')),
	array('label'=>'Buat Pengguna', 'url'=>array('create')),
	array('label'=>'Atur Pengguna', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Hapus Pengguna', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Apakah anda yakin ingin menghapus pengguna ini?')),
	/*array('label'=>'Atur Pengguna', 'url'=>array('admin')),*/
);
?>

<h1> <?php echo $model->username; ?> (<?php echo $model->role; ?>)</h1>
<h1>Lihat Pengguna #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'role',

	),
)); ?>
