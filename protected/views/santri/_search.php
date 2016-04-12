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
		<?php echo $form->label($model,'nis'); ?>
		<?php echo $form->textField($model,'nis',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nik'); ?>
		<?php echo $form->textField($model,'nik',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nisn'); ?>
		<?php echo $form->textField($model,'nisn',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_lengkap'); ?>
		<?php echo $form->textField($model,'nama_lengkap',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_kecil'); ?>
		<?php echo $form->textField($model,'nama_kecil',array('size'=>10,'maxlength'=>10)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenjang'); ?>
		<?php echo $form->textField($model,'jenjang',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tempat_lahir'); ?>
		<?php echo $form->textField($model,'tempat_lahir',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_lahir'); ?>
		<?php echo $form->textField($model,'tanggal_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'golongan_darah'); ?>
		<?php echo $form->textField($model,'golongan_darah',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anak_ke'); ?>
		<?php echo $form->textField($model,'anak_ke'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jum_saudara'); ?>
		<?php echo $form->textField($model,'jum_saudara'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Perwalian_nip_santri'); ?>
		<?php echo $form->textField($model,'Perwalian_nip_santri'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Perwalian_status'); ?>
		<?php echo $form->textField($model,'Perwalian_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Pemasukkan_santri_kode'); ?>
		<?php echo $form->textField($model,'Pemasukkan_santri_kode',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->