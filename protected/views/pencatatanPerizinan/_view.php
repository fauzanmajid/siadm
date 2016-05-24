<?php
/* @var $this PencatatanPerizinanController */
/* @var $data PencatatanPerizinan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nip_santri')); ?>:</b>
	<?php echo CHtml::encode($data->nip_santri); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kesiswaan')); ?>:</b>
	<?php echo CHtml::encode($data->id_kesiswaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->deskripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('durasi')); ?>:</b>
	<?php echo CHtml::encode($data->durasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_awal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_awal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_akhir')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_akhir); ?>
	<br />

</div>