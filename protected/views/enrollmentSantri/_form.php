<?php
/* @var $this EnrollmentSantriController */
/* @var $model EnrollmentSantri */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'enrollment-santri-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<<<<<<< HEAD
	<p class="note">Fields with <span class="required">*</span> are required.</p>
=======
	<p class="note"><span class="required">*</span> Wajib diisi.</p>
>>>>>>> master

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nip_santri'); ?>
		<?php echo $form->textField($model,'nip_santri',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'nip_santri'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_matpel'); ?>
		<?php echo $form->textField($model,'id_matpel'); ?>
		<?php echo $form->error($model,'id_matpel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nilai_harian'); ?>
		<?php echo $form->textField($model,'nilai_harian'); ?>
		<?php echo $form->error($model,'nilai_harian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nilai_uts'); ?>
		<?php echo $form->textField($model,'nilai_uts'); ?>
		<?php echo $form->error($model,'nilai_uts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nilai_uas'); ?>
		<?php echo $form->textField($model,'nilai_uas'); ?>
		<?php echo $form->error($model,'nilai_uas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nilai_akhir'); ?>
		<?php echo $form->textField($model,'nilai_akhir'); ?>
		<?php echo $form->error($model,'nilai_akhir'); ?>
	</div>

	<div class="row buttons">
<<<<<<< HEAD
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
=======
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save'); ?>
>>>>>>> master
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->