<?php
/* @var $this PencatatanPerizinanController */
/* @var $model PencatatanPerizinan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nip_santri'); ?>
		<?php echo $form->textField($model,'nip_santri'); ?>
	</div>
	
	<!-- <div class="row">
		<?php echo $form->label($model,'id_kesiswaan'); ?>
		<?php echo $form->textField($model,'id_kesiswaan',array('size'=>15,'maxlength'=>15)); ?>
	</div>
 -->
	<div class="row">
		<?php echo $form->label($model,'nama_lengkap'); ?>
		<?php echo $form->textField($model,'nama_lengkap',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->