<?php
/* @var $this PencatatanPerizinanController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'Buat Pencatatan Perizinan', 'url'=>array('create')),
);
?>

<h1>Pencatatan Perizinan</h1>

<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pencatatan-perizinan-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'pencatatan_perizinan',
		array(
            'class' => 'CLinkColumn',
            'labelExpression' => '$data->nipSantri->nama_lengkap',
            'urlExpression' => 'Yii::app()->createUrl("RiwayatPenyakit/view",array("id"=>$data->no_pencatatan))',
            'header' => 'Nama Santri',
            'htmlOptions' => array('style' => 'text-align: center; color : #6cac70;')
        ),
        'id_kesiswaan',
		'deskripsi',
		'durasi',
		'tanggal_awal',
		/*
		'tanggal_akhir',
		'kategori',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
