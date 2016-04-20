<?php
    $pelanggaran = PencatatanPelanggaran::model()->findAllByAttributes(array('nip_santri' => $model->nip));
    if (empty($pelanggaran)) {
        echo 'No Entry';
        ?>
        <?php /*if (UserWeb::instance()->isHRD() && UserWeb::instance()->ID != $model->ID ) { ?>
            <br />
            <button><?php echo CHtml::link('Add', array('pelanggaran/create', 'id' => $model->ID)) ?></button>
            <?php
        }*/
    }
    else {
        foreach ($pelanggaran as $value) {
            $this->renderPartial('partial/pelanggaran-item', array(
                'model' => $value,
            ));
        }
        if (UserWeb::instance()->isKesiswaan()) {
            ?>
            <br/>
                <button style="float: right">
                    <?php echo CHtml::link('Tambah', array('pencatatanPelanggaran/create', 'id' => $model->nip)) ?>
                </button>
            <?php
        }
    }
?>