<?php
/* @var $this EmployeeController */
/* @var $model Vacation */

$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'nipSantri.nama_lengkap',
        'nama_penyakit',
        
    ),
));
if (UserWeb::instance()->isKesiswaan()) {
    ?>
    <!-- <button>
        <?php
        echo CHtml::link('Edit', array('riwayatPenyakit/update', 'id' => $model->no_pencatatan))
        ?>
    </button>
    <button onclick="return confirm('Are you sure?')">
        <?php
        echo CHtml::link('Delete', array('riwayatPenyakit/delete', 'id' => $model->no_pencatatan))
        ?>
    </button> -->
<?php }

?>
<hr>