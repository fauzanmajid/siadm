<?php
/* @var $this Enrolllment_GuruController */
/* @var $data Enrolllment_Guru */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_guru')); ?>:</b>
	<?php echo CHtml::encode($data->id_guru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_matpel')); ?>:</b>
	<?php echo CHtml::encode($data->id_matpel); ?>
	<br />


</div>