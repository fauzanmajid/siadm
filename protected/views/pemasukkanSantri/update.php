<?php
/* @var $this PemasukkanSantriController */
/* @var $model PemasukkanSantri */


?>

<h1>Atur Pemasukan Santri <?php echo $model->kode; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>