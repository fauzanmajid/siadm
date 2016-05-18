<?php
/* @var $this KelasController */
/* @var $model Kelas */

/*$this->breadcrumbs=array(
	'Kelas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
<<<<<<< HEAD
);
/*
$this->menu=array(
=======
);*/

/*$this->menu=array(
>>>>>>> master
	array('label'=>'List Kelas', 'url'=>array('index')),
	array('label'=>'Create Kelas', 'url'=>array('create')),
	array('label'=>'View Kelas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Kelas', 'url'=>array('admin')),
<<<<<<< HEAD
);
*/
=======
);*/
>>>>>>> master
?>

<h1>Atur Kelas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>