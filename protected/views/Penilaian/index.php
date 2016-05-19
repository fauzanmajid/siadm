<?php
/* @var $this PencatatanPelanggaranController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Pencatatan Pelanggaran',
);*/

/*
$this->menu=array(
	array('label'=>'Tambah Pelanggaran Santri', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$('#penilaian-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	$('.search-result').show();
	return false;
});
");
*/
?>


<h1>Penilaian</h1>

<!--<div class="search-form">
<?php 
//$this->renderPartial('_search',array(
//'model'=>$model,)); 
?>
</div>
 search-form -->

<div class='search-result'>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'penilaian-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'idkelas',
		'idmatpel',
		'nip_santri',
		//'idguru',
		array(
			 'header' => 'Action',
			'class'=>'CButtonColumn',
		),
		),
	)); 
?>
</div>
<input type=button onClick="location.href='http://localhost/siadm/index.php/penilaian/create'"value='Buat'>
