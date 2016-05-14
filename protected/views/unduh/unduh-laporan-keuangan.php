
<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */


/*$this->breadcrumbs=array(
	'Pengguna',
);*/

?>
<h1>Unduh Laporan Keuangan</h1>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'unduh-keuangan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="form">
<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo "Tanggal Awal"; ?>
        <?php
	        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	            'model' => $model,
	            'attribute' => 'tanggal_awal',
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
        <?php echo $form->error($model, 'tanggal_awal'); ?>
	</div>

	<div class="row">
		<?php echo "Tanggal Akhir"; ?>
        <?php
	        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	            'model' => $model,
	            'attribute' => 'tanggal_akhir',
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
        <?php echo $form->error($model, 'tanggal_akhir'); ?>
	</div>

	<div class="row">
		<?php echo 'Jenis'; ?>
		<?php echo $form->dropDownList($model,'jenis',array('Pemasukan'=>'Pemasukan', 'Pengeluaran'=>'Pengeluaran', 'Total'=>'Total'), array('empty'=>'--Pilih Jenis--')); ?>
		<?php echo $form->error($model,'jenis'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Unduh'); ?>
	</div>
</div>
<?php $this->endWidget(); ?>
