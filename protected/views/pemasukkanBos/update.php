<?php
/* @var $this PemasukkanBosController */
/* @var $model PemasukkanBos */

?>

<h1>Atur Pemasukan BOS <?php echo $model->kode; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>