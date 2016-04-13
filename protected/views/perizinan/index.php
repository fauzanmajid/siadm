<?php
/* @var $this PerizinanController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Perizinans',
);*/

$this->menu=array(
	array('label'=>'Tambah Perizinan Santri', 'url'=>array('create')),
	array('label'=>'Atur Perizinan Santri', 'url'=>array('admin')),
);
?>

<h1>Perizinan Santri</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'emptyText'=>'Tidak ada data yang ditemukan.'
)); ?>
