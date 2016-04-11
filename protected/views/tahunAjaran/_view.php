<?php
/* @var $this TahunAjaranController */
/* @var $data TahunAjaran */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_ajaran')); ?>:</b>
	<?php echo CHtml::encode($data->tahun_ajaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_matpel')); ?>:</b>
	<?php echo CHtml::encode($data->id_matpel); ?>
	<br />


</div>