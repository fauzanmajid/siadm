<?php
/* @var $this PerizinanController */
/* @var $model Perizinan */

/*$this->breadcrumbs=array(
	'Perizinans'=>array('index'),
	'Create',
);*/

$this->menu=array(
	array('label'=>'Daftar Perizinan Santri', 'url'=>array('index')),
	array('label'=>'Atur Perizinan Santri', 'url'=>array('admin')),
);
?>

<h1>Tambah Perizinan Santri</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>