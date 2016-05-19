<?php
/* @var $this PerwalianController */
/* @var $model Perwalian */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'perwalian-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<<<<<<< HEAD
<<<<<<< HEAD
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
=======
=======
>>>>>>> master
	<p class="note"><span class="required">*</span> Wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<!-- <div class="row">
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> master
		<?php echo $form->labelEx($model,'nip_santri'); ?>
		<?php echo $form->textField($model,'nip_santri',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'nip_santri'); ?>
	</div>
<<<<<<< HEAD
<<<<<<< HEAD

=======
 -->
>>>>>>> master
=======
 -->
>>>>>>> master
	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'nama'); ?>
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
		<?php echo $form->labelEx($model,'agama'); ?>
		<?php echo $form->textField($model,'agama',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'agama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_telepon'); ?>
		<?php echo $form->textField($model,'no_telepon',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'no_telepon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pekerjaan'); ?>
		<?php echo $form->textField($model,'pekerjaan',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'pekerjaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pendidikan'); ?>
		<?php echo $form->textField($model,'pendidikan',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'pendidikan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'penghasilan'); ?>
		<?php echo $form->textField($model,'penghasilan'); ?>
		<?php echo $form->error($model,'penghasilan'); ?>
	</div>

	<div class="row buttons">
<<<<<<< HEAD
<<<<<<< HEAD
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
=======
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Simpan'); ?>
>>>>>>> master
=======
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Simpan'); ?>
>>>>>>> master
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->