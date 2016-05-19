<?php
/* @var $this PerwalianController */
/* @var $model Perwalian */

?>

<h1>Sunting Wali Santri <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>