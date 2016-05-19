<?php
/* @var $this PencatatanPelanggaranController */
/* @var $model PencatatanPelanggaran */

?>

<h1>Lihat Penilaian Santri <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idkelas',
		'idmatpel',
		'idguru',
		
	),
)); ?>
<div class='search-result' >

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'penilaian-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'nip_santri',
		'nilai_harian',
		'nilai_uts',
		'nilai_uas',
		'nilai_akhir',
		array(
			 'header' => 'Action',
			'class'=>'CButtonColumn',
		),
	),
)); 
?>
</div>
