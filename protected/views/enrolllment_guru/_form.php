<?php
/* @var $this Enrolllment_GuruController */
/* @var $model Enrolllment_Guru */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'enrolllment--guru-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<p class="note"><span class="required">*</span> Wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_guru'); ?>
		<?php echo $form->textField($model,'id_guru'); ?>
		<?php echo $form->error($model,'id_guru'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_matpel'); ?>
		<?php echo $form->textField($model,'id_matpel'); ?>
		<?php echo $form->error($model,'id_matpel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Buat' : 'Simpan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->