<?php
/* @var $this SantriController */
/* @var $data Santri */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nip')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nip), array('view', 'id'=>$data->nip)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nis')); ?>:</b>
	<?php echo CHtml::encode($data->nis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nik')); ?>:</b>
	<?php echo CHtml::encode($data->nik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nisn')); ?>:</b>
	<?php echo CHtml::encode($data->nisn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_lengkap')); ?>:</b>
	<?php echo CHtml::encode($data->nama_lengkap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kecil')); ?>:</b>
	<?php echo CHtml::encode($data->nama_kecil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenjang')); ?>:</b>
	<?php echo CHtml::encode($data->jenjang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tempat_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tempat_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('golongan_darah')); ?>:</b>
	<?php echo CHtml::encode($data->golongan_darah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anak_ke')); ?>:</b>
	<?php echo CHtml::encode($data->anak_ke); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jum_saudara')); ?>:</b>
	<?php echo CHtml::encode($data->jum_saudara); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Perwalian_nip_santri')); ?>:</b>
	<?php echo CHtml::encode($data->Perwalian_nip_santri); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Perwalian_status')); ?>:</b>
	<?php echo CHtml::encode($data->Perwalian_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pemasukkan_santri_kode')); ?>:</b>
	<?php echo CHtml::encode($data->Pemasukkan_santri_kode); ?>
	<br />

	*/ ?>

</div>