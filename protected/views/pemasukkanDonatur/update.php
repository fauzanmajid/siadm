<?php
/* @var $this PemasukkanDonaturController */
/* @var $model PemasukkanDonatur */

?>

<h1>Atur Pemasukan Donatur <?php echo $model->kode; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>