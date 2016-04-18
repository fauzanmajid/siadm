<?php
/* @var $this PencatatanPerizinanController */
/* @var $model PencatatanPerizinan */

$this->menu=array(
	array('label'=>'Daftar Pencatatan Perizinan', 'url'=>array('index')),
);
?>

<h1>Buat Pencatatan Perizinan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>