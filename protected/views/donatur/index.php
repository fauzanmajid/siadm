<?php
Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
	$('#donatur-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	$('.search-result').show();
	return false;
});
");

// $this->menu=array(
// 	array('label'=>'Create Donatur', 'url'=>array('create')),
// 	array('label'=>'Manage Donatur', 'url'=>array('admin')),
// );
?>

<h1>Donatur</h1>

<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class='search-result' style="display:none">

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'donatur-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama_lengkap',
		'pekerjaan',
		'alamat',
		'no_telepon',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<input type=button onClick="location.href='http://localhost/siadm/index.php/Donatur/create'"value='Buat'>
