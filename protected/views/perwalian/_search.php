<?php
/* @var $this PerwalianController */
/* @var $model Perwalian */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nip_santri'); ?>
		<?php echo $form->textField($model,'nip_santri',array('size'=>15,'maxlength'=>15)); ?>
	</div>

<<<<<<< HEAD
<<<<<<< HEAD
	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>15,'maxlength'=>15)); ?>
	</div>

=======
=======
>>>>>>> master
	<!-- <div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>15,'maxlength'=>15)); ?>
	</div>
 -->
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> master
	<div class="row">
		<?php echo $form->label($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>25,'maxlength'=>25)); ?>
	</div>

<<<<<<< HEAD
<<<<<<< HEAD
	<div class="row">
		<?php echo $form->label($model,'tempat_lahir'); ?>
		<?php echo $form->textField($model,'tempat_lahir',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
=======
=======
>>>>>>> master
	<!-- <div class="row">
		<?php echo $form->label($model,'tempat_lahir'); ?>
		<?php echo $form->textField($model,'tempat_lahir',array('size'=>15,'maxlength'=>15)); ?>
	</div>
 -->
<!-- 	<div class="row">
<<<<<<< HEAD
>>>>>>> master
=======
>>>>>>> master
		<?php echo $form->label($model,'tanggal_lahir'); ?>
		<?php echo $form->textField($model,'tanggal_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'agama'); ?>
		<?php echo $form->textField($model,'agama',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_telepon'); ?>
		<?php echo $form->textField($model,'no_telepon',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pekerjaan'); ?>
		<?php echo $form->textField($model,'pekerjaan',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pendidikan'); ?>
		<?php echo $form->textField($model,'pendidikan',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'penghasilan'); ?>
		<?php echo $form->textField($model,'penghasilan'); ?>
	</div>
<<<<<<< HEAD
<<<<<<< HEAD

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
=======
 -->
	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari'); ?>
>>>>>>> master
=======
 -->
	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari'); ?>
>>>>>>> master
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->