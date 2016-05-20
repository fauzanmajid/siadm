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

<<<<<<< HEAD
<<<<<<< HEAD
	<p class="note">Fields with <span class="required">*</span> are required.</p>
=======
	<p class="note"><span class="required">*</span> Wajib diisi.</p>
>>>>>>> master
=======
	<p class="note"><span class="required">*</span> Wajib diisi.</p>
>>>>>>> master

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
<<<<<<< HEAD
<<<<<<< HEAD
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
=======
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save'); ?>
>>>>>>> master
=======
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save'); ?>
>>>>>>> master
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->