<?php
/* @var $this MataPelajaranController */
/* @var $model MataPelajaran */

?>

<h1>Atur Mata Pelajaran<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>