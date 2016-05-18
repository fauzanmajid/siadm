<?php
?>

<h1>STATISTIK PENGELUARAN</h1>

<?php
	$now = new \Datetime('now');
$date = $now->format('D-M-Y'); 
	$kategori= array('P1','P2','P3');

	$jumlah = array();
	$tgl = array();
	$jumlah2 = array(20, 25, 25);
	;
	
	foreach($statistik as $t)
	{
	    
	    array_push($tgl, $t['tanggal_pengeluaran']);
	    array_push($jumlah, intval($t['Jumlah_Pengeluaran']));
		
	}
	

	$this->Widget('ext.highcharts.HighchartsWidget', array(
	    'options' => array(
	      	'title' => array('text' => 'Jumlah Pengeluarajjjn'),
	      	'xAxis' => array(
	         	'categories' => $tgl
	      	),

	      	'yAxis' => array(
	        	'title' => array('text' => 'Jumlah Pengeluaran'), 	
	         		
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
	          		'name' => 'Jumlah Pengeluaran', 
	          		'data' => $jumlah
	          		//$jumlah ,
	          	),
	      	),

	       	


	    )
	));
?>




