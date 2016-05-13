<?php
/* @var $this Enrollment_PelajaranController */
/* @var $model Enrollment_Pelajaran */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'enrollment--pelajaran-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><span class="required">*</span> Wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_kelas'); ?>
		<?php echo $form->textField($model,'id_kelas'); ?>
		<?php echo $form->error($model,'id_kelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_matpel'); ?>
		<?php echo $form->textField($model,'id_matpel'); ?>
		<?php echo $form->error($model,'id_matpel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->