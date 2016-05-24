<?php
/* @var $this Enrolllment_GuruController */
/* @var $model Enrolllment_Guru */

/*$this->breadcrumbs=array(
	'Enrolllment  Gurus'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

);*/
?>

<h1>Atur Alokasi Guru <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>