<!--
<?php
/* @var $this MataPelajaranController */
/* @var $dataProvider CActiveDataProvider */
/*
if (UserWeb::instance()->isKurikulum()) {
    $this->menu=array(
    	array('label'=>'Buat Mata Pelajaran', 'url'=>array('create')),
    );
}
*/

?>
-->
<h1>Mata Pelajaran</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mata-pelajaran-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama',
		'jenjang',
		array(
			'class'=>'CButtonColumn',
		),
	),
	'emptyText'=>'Tidak ada data yang ditemukan.'
)); ?>
