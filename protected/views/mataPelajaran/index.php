<?php
/* @var $this MataPelajaranController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mata Pelajarans',
);

$this->menu=array(
	array('label'=>'Create MataPelajaran', 'url'=>array('create')),
	array('label'=>'Manage MataPelajaran', 'url'=>array('admin')),
);
?>

<h1>Mata Pelajarans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
