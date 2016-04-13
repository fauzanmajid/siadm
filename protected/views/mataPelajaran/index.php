<?php
/* @var $this MataPelajaranController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mata Pelajarans',
);

$this->menu=array(
	array('label'=>'Create MataPelajaran', 'url'=>array('create')),
	array('label'=>'Manage MataPelajaran', 'url'=>array('admin')),
);
?>

<h1>Mata Pelajaran</h1>


<div class="search-form" >
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));*/ ?>

<?php /*$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mata-pelajaran-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'nama',
		'jenjang',
		array(
			'class'=>'CButtonColumn',
		),
	),
));*/ ?>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'mata-pelajaran-grid',
    'dataProvider' => $model->search(),
    /*'pager' => array(
        'header' => '',*/
    'columns' => array(
        array(
            'header' => 'No',
            'value' => '$this->grid->dataProvider->pagination->offset + $row+1',
            'htmlOptions' => array('style' => 'text-align: center;')
        ),
        array(
            'name' => 'id',
            'header' => 'ID',
            'htmlOptions' => array('style' => 'text-align: center;')
        ),
        array(
            'class' => 'CLinkColumn',
            'labelExpression' => '$data->nama',
            'urlExpression' => 'Yii::app()->createUrl("MataPelajaran/view",array("id"=>$data->id))',
            'header' => 'Nama',
            'htmlOptions' => array('style' => 'text-align: center; color : #6cac70;')
        ),
        array(
            'name' => 'jenjang',
            'header' => 'Jenjang',
            'htmlOptions' => array('style' => 'text-align: center;')
        ),
        array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
			'deleteConfirmation'=>"js:'Anda yakin?'",
		),
    ),
));
?>
