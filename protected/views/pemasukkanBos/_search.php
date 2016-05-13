<?php
/* @var $this PemasukkanBosController */
/* @var $model PemasukkanBos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kode'); ?>
		<?php echo $form->textField($model,'kode'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_bendahara'); ?>
		<?php echo $form->textField($model,'id_bendahara'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nominal'); ?>
		<?php echo $form->textField($model,'nominal'); ?>
	</div>

<!-- 	<div class="row">
		<?php echo $form->label($model,'timestamp'); ?>
		<?php echo $form->textField($model,'timestamp'); ?>
	</div> -->

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->