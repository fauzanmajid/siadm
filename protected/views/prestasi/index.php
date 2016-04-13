<?php
/* @var $this PrestasiController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Prestasis',
);*/

$this->menu=array(
	array('label'=>'Tambah Prestasi Santri', 'url'=>array('create')),
	array('label'=>'Atur Prestasi Santri', 'url'=>array('admin')),
);
?>

<h1>Catatan Prestasi Santri</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'emptyText'=>'Tidak ada data yang ditemukan.'
)); ?>
