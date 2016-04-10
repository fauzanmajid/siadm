<?php
/* @var $this RiwayatPenyakitController */
/* @var $data RiwayatPenyakit */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_pencatatan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->no_pencatatan), array('view', 'id'=>$data->no_pencatatan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nip_santri')); ?>:</b>
	<?php echo CHtml::encode($data->nip_santri); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_penyakit')); ?>:</b>
	<?php echo CHtml::encode($data->nama_penyakit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />


</div>