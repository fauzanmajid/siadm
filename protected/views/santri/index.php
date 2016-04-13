<?php
/* @var $this SantriController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Data Santri',
);*/

$this->menu=array(
	array('label'=>'Tambah Data Santri', 'url'=>array('create')),
	array('label'=>'Atur Data Santri', 'url'=>array('admin')),
);
?>

<h1>Data Santri</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'emptyText'=>'Tidak ada data yang ditemukan.'
)); ?>
