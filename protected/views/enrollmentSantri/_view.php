<?php
/* @var $this EnrollmentSantriController */
/* @var $data EnrollmentSantri */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nip_santri')); ?>:</b>
	<?php echo CHtml::encode($data->nip_santri); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_matpel')); ?>:</b>
	<?php echo CHtml::encode($data->id_matpel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_harian')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_harian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_uts')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_uts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_uas')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_uas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_akhir')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_akhir); ?>
	<br />


</div>