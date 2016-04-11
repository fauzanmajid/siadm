<?php
/* @var $this SantriController */
/* @var $model Santri */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'santri-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nip'); ?>
		<?php echo $form->textField($model,'nip',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'nip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nis'); ?>
		<?php echo $form->textField($model,'nis',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'nis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nik'); ?>
		<?php echo $form->textField($model,'nik',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'nik'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nisn'); ?>
		<?php echo $form->textField($model,'nisn',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'nisn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_lengkap'); ?>
		<?php echo $form->textField($model,'nama_lengkap',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'nama_lengkap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_kecil'); ?>
		<?php echo $form->textField($model,'nama_kecil',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'nama_kecil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenjang'); ?>
		<?php echo $form->textField($model,'jenjang',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'jenjang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tempat_lahir'); ?>
		<?php echo $form->textField($model,'tempat_lahir',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'tempat_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_lahir'); ?>
		<?php echo $form->textField($model,'tanggal_lahir'); ?>
		<?php echo $form->error($model,'tanggal_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'golongan_darah'); ?>
		<?php echo $form->textField($model,'golongan_darah',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'golongan_darah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anak_ke'); ?>
		<?php echo $form->textField($model,'anak_ke'); ?>
		<?php echo $form->error($model,'anak_ke'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jum_saudara'); ?>
		<?php echo $form->textField($model,'jum_saudara'); ?>
		<?php echo $form->error($model,'jum_saudara'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Perwalian_nip_santri'); ?>
		<?php echo $form->textField($model,'Perwalian_nip_santri'); ?>
		<?php echo $form->error($model,'Perwalian_nip_santri'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Perwalian_status'); ?>
		<?php echo $form->textField($model,'Perwalian_status'); ?>
		<?php echo $form->error($model,'Perwalian_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Pemasukkan_santri_kode'); ?>
		<?php echo $form->textField($model,'Pemasukkan_santri_kode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Pemasukkan_santri_kode'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->