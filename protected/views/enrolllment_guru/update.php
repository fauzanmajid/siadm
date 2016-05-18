<?php
/* @var $this Enrolllment_GuruController */
/* @var $model Enrolllment_Guru */

/*$this->breadcrumbs=array(
	'Enrolllment  Gurus'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Enrolllment_Guru', 'url'=>array('index')),
	array('label'=>'Create Enrolllment_Guru', 'url'=>array('create')),
	array('label'=>'View Enrolllment_Guru', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Enrolllment_Guru', 'url'=>array('admin')),
);*/
?>

<h1>Atur Alokasi Guru <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>