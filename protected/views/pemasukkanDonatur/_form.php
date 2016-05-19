<?php
/* @var $this PemasukkanDonaturController */
/* @var $model PemasukkanDonatur */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pemasukkan-donatur-form',
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

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal'); ?>
		<?php
	        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	            'model' => $model,
	            'attribute' => 'tanggal',
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
		<?php echo $form->error($model,'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keterangan'); ?>
		<?php echo $form->textField($model,'keterangan'); ?>
		<?php echo $form->error($model,'keterangan'); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'timestamp'); ?>
		<?php echo $form->textField($model,'timestamp'); ?>
		<?php echo $form->error($model,'timestamp'); ?>
	</div> -->

	<div class="row">
		<!-- <?php echo $form->labelEx($model,'id_donatur'); ?>
		<?php echo $form->textField($model,'id_donatur'); ?>
		<?php echo $form->error($model,'id_donatur'); ?>
 -->

		<?php echo $form->labelEx($model,'id_donatur'); ?>
		<br><p style='font-size: 75%'>Nomor Id Donatur</p>
		<?php
			$dropDownDonatur = CHtml::listData(Donatur::model()->findAll(),'id','concatened');
			echo $form->dropDownList($model, 'id_donatur', $dropDownDonatur);			      
		?>

		<?php echo $form->error($model,'id_donatur', $dropDownDonatur); ?>
	</div>

	<div class="row buttons">
<<<<<<< HEAD
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save'); ?>
<<<<<<< HEAD
=======
=======
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Simpan'); ?>
>>>>>>> f5cfa5377e90676ea0786fe8dfe6ae4e173e19d5
>>>>>>> master
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->