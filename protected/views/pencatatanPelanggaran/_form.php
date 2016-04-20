<?php
/* @var $this PencatatanPelanggaranController */
/* @var $model PencatatanPelanggaran */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pencatatan-pelanggaran-form',
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
		<br><p style='font-size: 75%'>Nomor Induk Santri</p>
		<?php
<<<<<<< HEAD
			$dropDownSantri = CHtml::listData(Santri::model()->findAll(), 'nip', 'nis');
			$coba = CHtml::listData(Santri::model()->findAll(), 'nip','nis');
			echo $form->dropDownList($model, 'nip_santri', $dropDownSantri);	
  
=======
			$dropDownSantri = CHtml::listData(Santri::model()->findAll(), 'nip', 'nip');
			$coba = CHtml::listData(Santri::model()->findAll(), 'nip','nip');
			
			echo $form->dropDownList($model, 'nip_santri', $dropDownSantri);
		  	

		      
>>>>>>> e7e30270b2b9733345d5010c93d51a74689101a1
		?>

		<?php echo $form->error($model,'nip_santri', $dropDownSantri); ?>
	</div>




	<!-- <div class="row">
		<?php echo $form->labelEx($model,'id_kesiswaan'); ?>
		<?php echo $form->textField($model,'id_kesiswaan'); ?>
		<?php echo $form->error($model,'id_kesiswaan'); ?>
	</div> -->

<div class="row">
		<?php echo $form->labelEx($model,'deskripsi'); ?>
		<?php echo $form->textField($model,'deskripsi'); ?>
		<?php echo $form->error($model,'deskripsi'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->