<?php
/* @var $this PrestasiController */
/* @var $model Prestasi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prestasi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><span class="required">*</span> Wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'nip_santri'); ?>
		<br><p style='font-size: 75%'>Nomor Induk Pesantren</p>
		<?php
			$dropDownSantri = CHtml::listData(Santri::model()->findAll(),'nip','concatened');
			echo $form->dropDownList($model, 'nip_santri', $dropDownSantri);			      
		?>

		<?php echo $form->error($model,'nip_santri', $dropDownSantri); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deskripsi'); ?>
		<?php echo $form->textField($model,'deskripsi',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'deskripsi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis'); ?>
		<?php echo $form->dropDownList($model,'jenis',array('Olahraga'=>'Olahraga','Akademik'=>'Akademik','Kesenian'=>'Kesenian')); ?>
		<?php echo $form->error($model,'jenis'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Simpan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->