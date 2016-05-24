<?php
/* @var $this PencatatanPelanggaranController */
/* @var $model PencatatanPelanggaran */

?>

<h1>Atur Pelanggaran Santri <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>