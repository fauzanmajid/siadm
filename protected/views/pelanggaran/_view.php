<?php
/* @var $this PelanggaranController */
/* @var $data Pelanggaran */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_pelanggaran')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->no_pelanggaran), array('view', 'id'=>$data->no_pelanggaran)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->deskripsi); ?>
	<br />


</div>