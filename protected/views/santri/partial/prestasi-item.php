<?php
/* @var $this EmployeeController */
/* @var $model Vacation */

$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'nipSantri.nama_lengkap',
        'deskripsi',
        'jenis',
        'tanggal'
    ),
));


?>
<hr>