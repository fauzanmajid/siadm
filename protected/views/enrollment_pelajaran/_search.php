<?php
/* @var $this Enrollment_PelajaranController */
/* @var $model Enrollment_Pelajaran */
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
		<?php echo $form->label($model,'id_kelas'); ?>
		<?php echo $form->textField($model,'id_kelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_matpel'); ?>
		<?php echo $form->textField($model,'id_matpel'); ?>
	</div>

	<div class="row buttons">
<<<<<<< HEAD
<<<<<<< HEAD
		<?php echo CHtml::submitButton('Search'); ?>
=======
		<?php echo CHtml::submitButton('Cari'); ?>
>>>>>>> master
=======
		<?php echo CHtml::submitButton('Cari'); ?>
>>>>>>> master
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->