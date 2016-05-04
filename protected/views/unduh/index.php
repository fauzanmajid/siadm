<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */


/*$this->breadcrumbs=array(
	'Pengguna',
);*/

?>
<h1>Unduh Data Santri</h1>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'unduh-santri-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="form">


	<div class="row">
		<?php echo "Tanggal Awal"; ?>
        <?php
	        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	            'model' => $model,
	            'attribute' => 'timestamp',
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
        <?php echo $form->error($model, 'timestamp'); ?>
	</div>

	<div class="row">
		<?php echo "Tanggal Akhir"; ?>
        <?php
	        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	            'model' => $model,
	            'attribute' => 'timestamp',
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
        <?php echo $form->error($model, 'timestamp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenjang'); ?>
		<?php echo $form->dropDownList($model,'jenjang',array('SMP'=>'SMP', 'SMK'=>'SMK')); ?>
		<?php echo $form->error($model,'jenjang'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Unduh' : 'Save'); ?>
	</div>
</div>
<?php $this->endWidget(); ?>