
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
*/
/*
Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$('#alokasi-kelas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	$('.search-result').show();
	return false;
});
");
*/
?>


<h1>Alokasi Kelas</h1>
<!--
<div class="search-form">
<?php
 /*
 $this->renderPartial('_search',array(
'model'=>$model,
)); */?>
</div>
-->
<!-- search-form -->

<div class='search-result'>

<?php 

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'alokasi-kelas-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'idkelas',		
		'idmatpel',
		'idguru',
		array(
		    'class'=>'CButtonColumn',
		    	'template'=>'{view}{update}',
		    	'buttons'=>array(
		        	'view' => array(
		            	'label'=>'Lihat',
		            	//'imageUrl'=>Yii::app()->request->baseUrl.'/images/email.png',
		            	'url'=>'Yii::app()->createUrl("alokasikelas/view", array("id"=>$data->idkelas,"id2"=>$data->idmatpel,"id3"=>$data->idguru))',
		        	),
		        	'update' => array(
		            	'label'=>'[-]',
		            	'url'=>'Yii::app()->createUrl("alokasikelas/update", array("id"=>$data->idkelas,"id2"=>$data->idmatpel,"id3"=>$data->idguru))',

		        	),
		    	),
		),
	)));
?>
<input type=button onClick="location.href='http://localhost/siadm/index.php/alokasikelas/create'"value='Buat'>

</div>
