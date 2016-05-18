<?php
/* @var $this TahunAjaranController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Tahun Ajarans',
);*/

/*$this->menu=array(
	array('label'=>'Buat Tahun Ajaran', 'url'=>array('create')),
	array('label'=>'Atur Tahun Ajaran', 'url'=>array('admin')),
);*/
?>

<h1>Tahun Ajaran</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
