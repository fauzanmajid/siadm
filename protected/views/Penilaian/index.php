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
	'id'=>'alokasi-grid',
	'dataProvider'=>$dataProvider,
	//'filter'=>$model,
	'columns'=>array(
		'id',
		/*array(     
            'header' => 'Nama Kelas',
	        'type'=>'raw',
            'value' => '$data->Kelas->nama',
            //'htmlOptions' => array('style' => 'text-align: center; color : #6cac70;')
       		
       	),*/
       	'idkelas',		
		'idmatpel',
		'idguru',
		
		array(
		    'class'=>'CButtonColumn',
		    	'template'=>'{update}',
		    	'buttons'=>array(
		        	'update' => array(
		            	'label'=>'Lihat',
		            	//'imageUrl'=>Yii::app()->request->baseUrl.'/images/email.png',
		            	'url'=>'Yii::app()->createUrl("Penilaian/create", array("id"=>$data->idkelas,"id2"=>$data->idmatpel,"id3"=>$data->idguru))',
		        	),
		        	/*'update' => array(
		            	'label'=>'[-]',
		            	'url'=>'Yii::app()->createUrl("alokasikelas/view", array("id"=>$data->idkelas,"id2"=>$data->idmatpel,"id3"=>$data->idguru))',

		        	),*/
		    	),
		),
		),
	)); 
?>
</div>
<!-- <input type=button onClick="location.href='http://localhost/siadm/index.php/penilaian/create'"value='Buat'>-->