<?php
/* @var $this PemasukkanSantriController */
/* @var $data PemasukkanSantri */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode), array('view', 'id'=>$data->kode)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bendahara')); ?>:</b>
	<?php echo CHtml::encode($data->id_bendahara); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nip_santri')); ?>:</b>
	<?php echo CHtml::encode($data->nip_santri); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nominal')); ?>:</b>
	<?php echo CHtml::encode($data->nominal); ?>
	<br />

<<<<<<< HEAD
=======
	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

>>>>>>> master
	<b><?php echo CHtml::encode($data->getAttributeLabel('timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->timestamp); ?>
	<br />


</div>