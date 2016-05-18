<?php
/* @var $this EmployeeController */
/* @var $model Vacation */

$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'nipSantri.nama_lengkap',
        'deskripsi',
        'tanggal_awal',
        'tanggal_akhir',
        'kategori'
    ),
));
if (UserWeb::instance()->isKesiswaan()) {
 }

?>
<hr>