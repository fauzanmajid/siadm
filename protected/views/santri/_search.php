<?php
/* @var $this SantriController */
/* @var $model Santri */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	

	<div class="row">
		<?php echo $form->label($model,'nip'); ?>
		<?php echo $form->textField($model,'nip',array('size'=>15,'maxlength'=>15)); ?>
	</div>


	<div class="row">
		<?php echo $form->label($model,'nama_lengkap'); ?>
		<?php echo $form->textField($model,'nama_lengkap',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->