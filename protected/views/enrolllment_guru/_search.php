<?php
/* @var $this Enrolllment_GuruController */
/* @var $model Enrolllment_Guru */
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
		<?php echo $form->label($model,'id_guru'); ?>
		<?php echo $form->textField($model,'id_guru'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_matpel'); ?>
		<?php echo $form->textField($model,'id_matpel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->