<?php
/* @var $this PencatatanPelanggaranController */
/* @var $model PencatatanPelanggaran */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'penilaian-form',
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
		<p style='font-size: 75%'>Nomor Induk Santri</p>
		<?php
			$dropDownSantri = CHtml::listData(Santri::model()->findAll(),'nip','concatened');
			echo $form->dropDownList($model, 'nip_santri', $dropDownSantri);			      
		?>

		<?php echo $form->error($model,'nip_santri', $dropDownSantri); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'idkelas'); ?>
		<?php
			$dropDownSantri = CHtml::listData(Kelas::model()->findAll(),'id','concatened');
			echo $form->dropDownList($model, 'idkelas', $dropDownSantri,array("disabled"=>"disabled"))
			;			      
		?>

	<?php echo $form->error($model,'idmatpel', $dropDownSantri); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'idmatpel'); ?>
		<?php
			$dropDownSantri = CHtml::listData(MataPelajaran::model()->findAll(),'id','concatened');
			echo $form->dropDownList($model, 'idmatpel', $dropDownSantri,array("disabled"=>"disabled"))
			;			      
		?>

	<?php echo $form->error($model,'idmatpel', $dropDownSantri); ?>
	</div>
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'idguru'); ?>
		<?php
			$dropDownSantri = CHtml::listData(User::model()->findAll(),'id','jabatan');
			echo $form->dropDownList($model, 'idguru', $dropDownSantri,array("disabled"=>"disabled"))
			;			      
		?>
		

	<?php echo $form->error($model,'idguru', $dropDownSantri); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'nilai_harian'); ?>
		<?php echo $form->textField($model,'nilai_harian'); ?>
		<?php echo $form->error($model,'nilai_harian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nilai_uts'); ?>
		<?php echo $form->textField($model,'nilai_uts'); ?>
		<?php echo $form->error($model,'nilai_uts'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'nilai_uas'); ?>
		<?php echo $form->textField($model,'nilai_uas'); ?>
		<?php echo $form->error($model,'nilai_uas'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'nilai_akhir'); ?>
		<?php echo $form->textField($model,'nilai_akhir'); ?>
		<?php echo $form->error($model,'nilai_akhir'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->