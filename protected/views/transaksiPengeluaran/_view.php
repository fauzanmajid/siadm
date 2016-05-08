<?php
/* @var $this TransaksiPengeluaranController */
/* @var $data TransaksiPengeluaran */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('Deskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->Deskripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_pengeluaran')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_pengeluaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->timestamp); ?>
	<br />


</div>