<?php
/* @var $this PemasukkanBosController */
/* @var $model PemasukkanBos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pemasukkan-bos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><span class="required">*</span> Wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'id_bendahara'); ?>
		<?php echo $form->textField($model,'id_bendahara'); ?>
		<?php echo $form->error($model,'id_bendahara'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'nominal'); ?>
		<?php echo $form->textField($model,'nominal'); ?>
		<?php echo $form->error($model,'nominal'); ?>
	</div>

	
		<?php echo $form->labelEx($model,'Tanggal'); ?>
		<?php
	        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	            'model' => $model,
	            'attribute' => 'Tanggal',
	            'options' => array(
	                'showAnim' => 'fadeIn',
	                'dateFormat' => 'yy-mm-dd',
	                'changeMonth' => true,
	                'changeYear' => true,
	                'yearRange' => '-200:+0',
	                'maxDate' => '0',
	            ),
	            'htmlOptions' => array('readonly' => true, 'class' => "form-control")
	        ));
        ?>
		<?php echo $form->error($model,'Tanggal'); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'Keterangan'); ?>
		<?php echo $form->textField($model,'Keterangan'); ?>
		<?php echo $form->error($model,'Keterangan'); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'timestamp'); ?>
		<?php echo $form->textField($model,'timestamp'); ?>
		<?php echo $form->error($model,'timestamp'); ?>
	</div> -->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->