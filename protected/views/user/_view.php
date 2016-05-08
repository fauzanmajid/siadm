<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">
	<!-- 	
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
<<<<<<< HEAD
		-->
	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>


	<b><?php echo CHtml::encode($data->getAttributeLabel('Nama Pengguna')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	
	
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Kata Sandi')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Jabatan')); ?>:</b>
	<?php echo CHtml::encode($data->role); ?>
	<br />
<!--VIEW PROFILE --> 	
<b><i><?php echo CHtml::link(CHtml::encode($data->getAttributeLabel('Lihat Profil>>')), array('view', 'id'=>$data->id)); ?></b></i>
<!-- end view profile--> 	
</div>