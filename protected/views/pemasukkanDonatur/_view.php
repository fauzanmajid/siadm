<?php
/* @var $this PemasukkanDonaturController */
/* @var $data PemasukkanDonatur */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode), array('view', 'id'=>$data->kode)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bendahara')); ?>:</b>
	<?php echo CHtml::encode($data->id_bendahara); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nominal')); ?>:</b>
	<?php echo CHtml::encode($data->nominal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->timestamp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_donatur')); ?>:</b>
	<?php echo CHtml::encode($data->id_donatur); ?>
	<br />


</div>