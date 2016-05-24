
<?php
/* @var $this PencatatanPelanggaranController */
/* @var $dataProvider CActiveDataProvider */

?>


<h1>Alokasi Kelas</h1>


<div class='search-result'>

<?php 

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'alokasi-kelas-grid',
	'dataProvider'=>$dataProvider,
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
<input type=button onClick="location.href='<?= Yii::app()->createUrl('alokasikelas/create')?>'" value='Buat'>

</div>
