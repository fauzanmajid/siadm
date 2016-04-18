<?php
/* @var $this PencatatanPerizinanController */
/* @var $model PencatatanPerizinan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pencatatan-perizinan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nip_santri'); ?>
		<?php echo $form->textField($model,'nip_santri',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'nip_santri'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_kesiswaan'); ?>
		<?php echo $form->textField($model,'id_kesiswaan'); ?>
		<?php echo $form->error($model,'id_kesiswaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deskripsi'); ?>
		<?php echo $form->textField($model,'deskripsi',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'deskripsi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'durasi'); ?>
		<?php echo $form->textField($model,'durasi'); ?>
		<?php echo $form->error($model,'durasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_awal'); ?>
		<?php echo $form->textField($model,'tanggal_awal'); ?>
		<?php echo $form->error($model,'tanggal_awal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_akhir'); ?>
		<?php echo $form->textField($model,'tanggal_akhir'); ?>
		<?php echo $form->error($model,'tanggal_akhir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kategori'); ?>
		<?php echo $form->textField($model,'kategori',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'kategori'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->