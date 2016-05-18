<?php
/* @var $this PerwalianController */
/* @var $dataProvider CActiveDataProvider */

<<<<<<< HEAD
$this->breadcrumbs=array(
	'Perwalians',
);

$this->menu=array(
	array('label'=>'Create Perwalian', 'url'=>array('create')),
	array('label'=>'Manage Perwalian', 'url'=>array('admin')),
);
?>

<h1>Perwalian</h1>
=======
?>
<h1>Wali Santri</h1>
>>>>>>> master

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
