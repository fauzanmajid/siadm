<?php
/* @var $this PencatatanPerizinanController */
/* @var $model PencatatanPerizinan */

$this->menu=array(
	array('label'=>'Daftar Perizinan', 'url'=>array('index')),
);
?>

<h1>Buat Catatan Perizinan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>