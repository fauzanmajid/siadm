<?php
/* @var $this PemasukkanSantriController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Pemasukkan Santris',
);

$this->menu=array(
	array('label'=>'Create PemasukkanSantri', 'url'=>array('create')),
	array('label'=>'Manage PemasukkanSantri', 'url'=>array('admin')),
);*/
?>

<h1>Pemasukan Santri</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
