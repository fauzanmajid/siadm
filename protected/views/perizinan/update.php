<?php
/* @var $this PerizinanController */
/* @var $model Perizinan */

/*$this->breadcrumbs=array(
	'Perizinans'=>array('index'),
	$model->no_izin=>array('view','id'=>$model->no_izin),
	'Update',
);*/

/*$this->menu=array(
	array('label'=>'Daftar Perizinan Santri', 'url'=>array('index')),
	array('label'=>'Buat Perizinan Santri', 'url'=>array('create')),
	array('label'=>'Lihat Perizinan Santri', 'url'=>array('view', 'id'=>$model->no_izin)),
	
);*/
?>

<h1>Atur Perizinan Santri #<?php echo $model->no_izin; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>