<?php
/* @var $this PencatatanPelanggaranController */
/* @var $model PencatatanPelanggaran */

/*$this->breadcrumbs=array(
	'Pencatatan Pelanggarans'=>array('index'),
	$model->id,
);*/

	
?>

<h1>View Alokasi #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idkelas',
		'idmatpel',
		'idguru',
	),
)); 
?>