<?php
/* @var $this PrestasiController */
/* @var $data Prestasi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_pencatatan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->no_pencatatan), array('view', 'id'=>$data->no_pencatatan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->deskripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis')); ?>:</b>
	<?php echo CHtml::encode($data->jenis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nip_santri')); ?>:</b>
	<?php echo CHtml::encode($data->nip_santri); ?>
	<br />


</div>