<?php
/* @var $this EnrollmentSantriController */
/* @var $model EnrollmentSantri */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nip_santri'); ?>
		<?php echo $form->textField($model,'nip_santri',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_matpel'); ?>
		<?php echo $form->textField($model,'id_matpel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nilai_harian'); ?>
		<?php echo $form->textField($model,'nilai_harian'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nilai_uts'); ?>
		<?php echo $form->textField($model,'nilai_uts'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nilai_uas'); ?>
		<?php echo $form->textField($model,'nilai_uas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nilai_akhir'); ?>
		<?php echo $form->textField($model,'nilai_akhir'); ?>
	</div>

	<div class="row buttons">
<<<<<<< HEAD
		<?php echo CHtml::submitButton('Search'); ?>
=======
		<?php echo CHtml::submitButton('Cari'); ?>
>>>>>>> master
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->