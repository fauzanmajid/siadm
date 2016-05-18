<?php
/* @var $this DonaturController */
/* @var $model Donatur */
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
		<?php echo $form->label($model,'nama_lengkap'); ?>
		<?php echo $form->textField($model,'nama_lengkap'); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form->label($model,'pekerjaan'); ?>
		<?php echo $form->textField($model,'pekerjaan',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_telepon'); ?>
		<?php echo $form->textField($model,'no_telepon',array('size'=>15,'maxlength'=>15)); ?>
	</div> -->

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->