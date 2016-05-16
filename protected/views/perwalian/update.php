<?php
/* @var $this PerwalianController */
/* @var $model Perwalian */

// $this->breadcrumbs=array(
// 	'Wali Santri'=>array('index'),
// 	$model->id=>array('view','id'=>$model->id),
// 	'Sunting',
// );

// $this->menu=array(
// 	array('label'=>'List Perwalian', 'url'=>array('index')),
// 	array('label'=>'Create Perwalian', 'url'=>array('create')),
// 	array('label'=>'View Perwalian', 'url'=>array('view', 'id'=>$model->id)),
// 	array('label'=>'Manage Perwalian', 'url'=>array('admin')),
// );
?>

<h1>Sunting Wali Santri <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>