<?php
/* @var $this RiwayatPenyakitController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Riwayat Penyakits',
);

$this->menu=array(
	array('label'=>'Create RiwayatPenyakit', 'url'=>array('create')),
	array('label'=>'Manage RiwayatPenyakit', 'url'=>array('admin')),
);
?>

<h1>Riwayat Penyakit</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
