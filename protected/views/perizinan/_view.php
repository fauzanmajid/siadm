<?php
/* @var $this PerizinanController */
/* @var $data Perizinan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_izin')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->no_izin), array('view', 'id'=>$data->no_izin)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategori')); ?>:</b>
	<?php echo CHtml::encode($data->kategori); ?>
	<br />


</div>