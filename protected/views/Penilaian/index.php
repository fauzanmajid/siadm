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
       	array(
            'header' => 'Username Guru',
            'value' => 'User::model()->findByPk($data->idguru)->username',
            'htmlOptions' => array('style' => 'text-align: center;')
        ),
		array(
            'header' => 'Kelas',
            'value' => 'Kelas::model()->findByPk($data->idkelas)->nama',
            'htmlOptions' => array('style' => 'text-align: center;')
        ),
        array(
            'header' => 'Mata Pelajaran',
            'value' => 'MataPelajaran::model()->findByPk($data->idmatpel)->nama',
            'htmlOptions' => array('style' => 'text-align: center;')
        ),
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