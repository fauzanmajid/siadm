<?php
/* @var $this PerwalianController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Perwalian',
);

$this->menu=array(
	array('label'=>'Create Perwalian', 'url'=>array('create')),
	array('label'=>'Manage Perwalian', 'url'=>array('admin')),
);
?>

<h1>Wali Santri</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
