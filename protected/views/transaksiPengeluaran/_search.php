<?php
/* @var $this TransaksiPengeluaranController */
/* @var $model TransaksiPengeluaran */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<!-- <div class="row">
		<?php echo $form->label($model,'kode'); ?>
		<?php echo $form->textField($model,'kode'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->label($model,'id_bendahara'); ?>
		<?php echo $form->textField($model,'id_bendahara'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nominal'); ?>
		<?php echo $form->textField($model,'nominal'); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form->label($model,'Deskripsi'); ?>
		<?php echo $form->textField($model,'Deskripsi',array('size'=>60,'maxlength'=>100)); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_pengeluaran'); ?>
		<?php
	        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	            'model' => $model,
	            'attribute' => 'tanggal_pengeluaran',
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
		<?php echo $form->error($model,'tanggal_pengeluaran'); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form->label($model,'timestamp'); ?>
		<?php echo $form->textField($model,'timestamp'); ?>
	</div> -->

	<div class="row buttons">
		<?php echo CHtml::submitButton('Cari'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->