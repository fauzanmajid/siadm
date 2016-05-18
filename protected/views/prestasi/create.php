
<?php
/* @var $this PrestasiController */
/* @var $model Prestasi */

/*$this->breadcrumbs=array(
	'Prestasis'=>array('index'),
	'Create',
);*/
/*
$this->menu=array(
	array('label'=>'Daftar Prestasi Santri', 'url'=>array('index')),
	
);
*/
?>

<h1>Buat Prestasi Santri</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>