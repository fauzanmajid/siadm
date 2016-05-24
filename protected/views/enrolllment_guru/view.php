<?php
/* @var $this Enrolllment_GuruController */
/* @var $model Enrolllment_Guru */

*/
?>

<h1>Lihat Alokasi Guru <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_guru',
		'id_matpel',
	),
)); ?>
