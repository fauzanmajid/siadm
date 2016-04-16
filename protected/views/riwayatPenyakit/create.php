<?php
/* @var $this RiwayatPenyakitController */
/* @var $model RiwayatPenyakit */



$this->menu=array(
	array('label'=>'Daftar Riwayat Penyakit', 'url'=>array('index')),
	
);
?>

<h1>Buat Riwayat Penyakit</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>