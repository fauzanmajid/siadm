<?php
/* @var $this EnrollmentSantriController */
/* @var $model EnrollmentSantri */

/*$this->breadcrumbs=array(
	'Enrollment Santris'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EnrollmentSantri', 'url'=>array('index')),
	array('label'=>'Create EnrollmentSantri', 'url'=>array('create')),
	array('label'=>'View EnrollmentSantri', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EnrollmentSantri', 'url'=>array('admin')),
);*/
?>

<h1>Atur Alokasi Santri <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>