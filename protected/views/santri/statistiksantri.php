<?php
?>

<h1>STATISTIK SANTRI</h1>

<?php

	$jenjang = array();
	$jml = array();

	foreach($statistik as $t)
	{
	    array_push($jenjang, $t['jenjang']);
	    array_push($jml, intval($t['jumlah_santri']));
	}

	$this->Widget('ext.highcharts.HighchartsWidget', array(
	    'options' => array(
	      	'title' => array('text' => 'Jumlah Santri'),
	      	'xAxis' => array(
	         	'categories' => $jenjang
	      	),
	      	'yAxis' => array(
	         	'title' => array('text' => 'Jumlah Santri')
	      	),
	      	'colors'=>array('#6AC36A'),
	      	'gradient' => array('enabled'=> true),
	      	'credits' => array('enabled' => false),
	      	'exporting' => array('enabled' => false),
	      	'chart' => array(
		        'plotBackgroundColor' => '#ffffff',
		        'plotBorderWidth' => null,
		        'plotShadow' => false,
		        'height' => 400,
		        'type'=>'column'
	      	),
	      	'title' => false,
	       	'series' => array(
	          	array(
	          		'name' => 'Jenjang Pendidikan', 
	          		'data' => $jml
	          	),
	      	),
	    )
	));
?>

<?php

	$jenis_kelamin = array();
	$jml = array();

	foreach($statistikGender as $t)
	{
	    array_push($jenis_kelamin, $t['jenis_kelamin']);
	    array_push($jml, intval($t['jumlah']));
	}

	$this->Widget('ext.highcharts.HighchartsWidget', array(
	    'options' => array(
	      	'title' => array('text' => 'Jumlah Santri'),
	      	'xAxis' => array(
	         	'categories' => $jenis_kelamin
	      	),
	      	'yAxis' => array(
	         	'title' => array('text' => 'Jumlah Santri')
	      	),
	      	'colors'=>array('#6AC36A'),
	      	'gradient' => array('enabled'=> true),
	      	'credits' => array('enabled' => false),
	      	'exporting' => array('enabled' => false),
	      	'chart' => array(
		        'plotBackgroundColor' => '#ffffff',
		        'plotBorderWidth' => null,
		        'plotShadow' => false,
		        'height' => 400,
		        'type'=>'column'
	      	),
	      	'title' => false,
	       	'series' => array(
	          	array(
	          		'name' => 'Jenis Kelamin', 
	          		'data' => $jml
	          	),
	      	),
	    )
	));
?>


