<?php
/* @var $this PencatatanPelanggaranController */
/* @var $model PencatatanPelanggaran */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alokasi-kelas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><span class="required">*</span> Wajib diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	
	<div class="row">
		<?php echo $form->labelEx($model,'idkelas'); ?>
		<?php
			$dropDownSantri = CHtml::listData(Kelas::model()->findAll(),'id','concatened');
			echo $form->dropDownList($model, 'idkelas', $dropDownSantri);			      
		?>

		<?php echo $form->error($model,'idkelas', $dropDownSantri); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'idmatpel'); ?>
		<?php
			$dropDownSantri = CHtml::listData(MataPelajaran::model()->findAll(),'id2','concatened');
			echo $form->dropDownList($model, 'idmatpel', $dropDownSantri);			      
		?>
		<?php echo $form->error($model,'idmatpel', $dropDownSantri); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idguru'); ?>
		<p style='font-size: 75%'>Nama Guru</p>
		
		<?php
		
			echo $form->dropDownList(
				$model, 
				'idguru', 
				CHtml::listData(User::model()->findAll(),'id3','jabatan')
				



				);			      
		
		?>

		<?php echo $form->error($model,'idguru', $dropDownSantri); ?>
		</div> 
	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->