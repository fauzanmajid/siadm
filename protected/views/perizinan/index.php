<?php
/* @var $this PerizinanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Perizinans',
);

$this->menu=array(
	array('label'=>'Create Perizinan', 'url'=>array('create')),
	array('label'=>'Manage Perizinan', 'url'=>array('admin')),
);
?>

<h1>Perizinans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
