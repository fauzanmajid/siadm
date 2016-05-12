<?php
/* @var $this Enrollment_PelajaranController */
/* @var $data Enrollment_Pelajaran */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kelas')); ?>:</b>
	<?php echo CHtml::encode($data->id_kelas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_matpel')); ?>:</b>
	<?php echo CHtml::encode($data->id_matpel); ?>
	<br />


</div>