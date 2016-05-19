<?php
/* @var $this PerwalianController */
/* @var $model Perwalian */

<<<<<<< HEAD
<<<<<<< HEAD
$this->breadcrumbs=array(
	'Perwalians'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Perwalian', 'url'=>array('index')),
	array('label'=>'Create Perwalian', 'url'=>array('create')),
	array('label'=>'View Perwalian', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Perwalian', 'url'=>array('admin')),
);
?>

<h1>Update Perwalian <?php echo $model->id; ?></h1>
=======
?>

<h1>Sunting Wali Santri <?php echo $model->id; ?></h1>
>>>>>>> master
=======
?>

<h1>Sunting Wali Santri <?php echo $model->id; ?></h1>
>>>>>>> master

<?php $this->renderPartial('_form', array('model'=>$model)); ?>