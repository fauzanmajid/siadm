<?php
/* @var $this PerizinanController */
/* @var $model Perizinan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'no_izin'); ?>
		<?php echo $form->textField($model,'no_izin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deskripsi'); ?>
		<?php echo $form->textField($model,'deskripsi',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'durasi'); ?>
		<?php echo $form->textField($model,'durasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_awal'); ?>
		<?php echo $form->textField($model,'tanggal_awal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_akhir'); ?>
		<?php echo $form->textField($model,'tanggal_akhir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kategori'); ?>
		<?php echo $form->textField($model,'kategori',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->