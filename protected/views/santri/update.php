<?php
/* @var $this SantriController */
/* @var $model Santri */

/*$this->breadcrumbs=array(
	'Data Santri'=>array('index'),
	$model->nip=>array('view','id'=>$model->nip),
	'Update',
);*/

?>

<h1>Atur Data Santri <?php echo $model->nip; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'modelwali'=>$modelwali)); ?>