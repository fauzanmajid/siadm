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
?>

<h1>Donatur</h1>

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
