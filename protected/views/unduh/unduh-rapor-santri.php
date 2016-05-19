
<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */


/*$this->breadcrumbs=array(
	'Pengguna',
);*/

?>
<h1>Unduh Rapor Santri</h1>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'unduh-rapor-santri',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="form">
<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo 'Jenjang'; ?>
		<?php echo $form->dropDownList($model,'jenis',array('SMP'=>'SMP', 'SMK'=>'SMK'), array('empty'=>'--Pilih Jenjang--')); ?>
		<?php echo $form->error($model,'jenjang'); ?>
	</div>

	<div class="row">
		<?php echo 'Kelas'; ?>
		<?php echo $form->dropDownList($model,'kelas',array('A'=>'A', 'B'=>'B', 'C'=>'C'), array('empty'=>'--Pilih Kelas--')); ?>
		<?php echo $form->error($model,'kelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_lengkap'); ?>
		<?php echo $form->textField($model,'nama_lengkap',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_lengkap'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Unduh'); ?>
	</div>
</div>
<?php $this->endWidget(); ?>
