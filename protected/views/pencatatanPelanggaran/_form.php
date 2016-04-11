<?php
/* @var $this PencatatanPelanggaranController */
/* @var $model PencatatanPelanggaran */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pencatatan-pelanggaran-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'No_pelanggaran'); ?>
		<?php echo $form->textField($model,'No_pelanggaran'); ?>
		<?php echo $form->error($model,'No_pelanggaran'); ?>
	</div>

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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->