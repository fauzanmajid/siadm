<?php
/* @var $this SantriController */
/* @var $model Santri */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'santri-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><span class="required">*</span> Wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nip'); ?><br><p style="font-size: 75%;">Nomor Induk Pesantren</p>
		<?php echo $form->textField($model,'nip',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nis'); ?><br><p style="font-size: 75%;">Nomor Induk Santri</p>
		<?php echo $form->textField($model,'nis',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nik'); ?>
		<br><p style="font-size: 75%;">Nomor Induk Kependudukan</p>
		<?php echo $form->textField($model,'nik',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nik'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nisn'); ?><br><p style="font-size: 75%;">Nomor Induk Siswa Nasional</p>
		<?php echo $form->textField($model,'nisn',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nisn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_lengkap'); ?>
		<?php echo $form->textField($model,'nama_lengkap',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_lengkap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_kecil'); ?>
		<?php echo $form->textField($model,'nama_kecil',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_kecil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',array( 'Yatim'=>'Yatim','Piatu'=>'Piatu','Yatimpiatu'=>'Yatim Piatu','Duafa'=>'Dhuafa','Mampu'=>'Mampu',)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenjang'); ?>
		<?php echo $form->dropDownList($model,'jenjang',array('SMP'=>'SMP','SMK'=>'SMK')); ?>
		<?php echo $form->error($model,'jenjang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tempat_lahir'); ?>
		<?php echo $form->textField($model,'tempat_lahir',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tempat_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'tanggal_lahir'); ?>
        <?php
	        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	            'model' => $model,
	            'attribute' => 'tanggal_lahir',
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
        <?php echo $form->error($model, 'tanggal_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'golongan_darah'); ?>
		<?php echo $form->dropDownList($model,'golongan_darah',array('A'=>'A', 'B'=>'B', 'AB'=>'AB', 'O'=>'O')); ?>
		<?php echo $form->error($model,'golongan_darah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anak_ke'); ?>
		<?php echo $form->textField($model,'anak_ke',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'anak_ke'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jum_saudara'); ?>
		<?php echo $form->textField($model,'jum_saudara',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'jum_saudara'); ?>
	</div>
<!--
	<div class="row">
        <?php echo $form->labelEx($model,'foto_url'); ?>
        <?php echo CHtml::activeFileField($model, 'foto_url'); ?>  
        //by this we can upload image 
        <?php echo $form->error($model,'foto_url'); ?>
	</div>
-->


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->