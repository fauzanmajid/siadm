
<?php
/* @var $this PencatatanPelanggaranController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Pencatatan Pelanggaran',
);*/


$this->menu=array(
	array('label'=>'Tambah Pelanggaran Santri', 'url'=>array('create')),
);

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

<div class="search-form">
<?php
 /*
 $this->renderPartial('_search',array(
'model'=>$model,
)); */?>
</div>

<!-- search-form -->

<div class='search-result' style="display:none">

<?php 
/*
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'alokasi-kelas-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'idkelas',		
		'idmatpel',
		'idguru',
		array(
			       'header' => 'Menu',
				'class'=>'CButtonColumn',
				'template'=>'{update}{delete}',
				'deleteConfirmation'=>"js:'Anda yakin?'",
			),
		),
));
*/
?>
	
</div>
<?php
$userCategory = alokasiKelas::model()->findByAttributes(array('idkelas'=>1,'idmatpel'=>2,'idguru'=>2));
// if user does not exist, you need to create it
echo $userCategory; //you will see the difference if it does exist or not exist

?>