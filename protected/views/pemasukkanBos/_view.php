<?php
/* @var $this PemasukkanBosController */
/* @var $data PemasukkanBos */
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

<<<<<<< HEAD
=======
	<b><?php echo CHtml::encode($data->getAttributeLabel('Tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->Tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->Keterangan); ?>
	<br />

>>>>>>> master
	<b><?php echo CHtml::encode($data->getAttributeLabel('timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->timestamp); ?>
	<br />


</div>