<?php
/* @var $this PencatatanPelanggaranController */
/* @var $data PencatatanPelanggaran */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('No_pelanggaran')); ?>:</b>
	<?php echo CHtml::encode($data->No_pelanggaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nip_santri')); ?>:</b>
	<?php echo CHtml::encode($data->nip_santri); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kesiswaan')); ?>:</b>
	<?php echo CHtml::encode($data->id_kesiswaan); ?>
	<br />


</div>