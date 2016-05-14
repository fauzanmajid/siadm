<?php
    $riwayatPenyakit = RiwayatPenyakit::model()->findAllByAttributes(array('nip_santri' => $model->nip));
    if (empty($riwayatPenyakit)) {
        echo 'Tidak ada riwayat penyakit santri.';
        /*echo 'No Entry';*/
        ?>
        <?php /*if (UserWeb::instance()->isHRD() && UserWeb::instance()->ID != $model->ID ) { ?>
            <br />
            <button><?php echo CHtml::link('Add', array('riwayatPenyakit/create', 'id' => $model->ID)) ?></button>
            <?php
        }*/
    }
    else {
        foreach ($riwayatPenyakit as $value) {
            $this->renderPartial('partial/riwayat-penyakit-item', array(
                'model' => $value,
            ));
        }
        if (UserWeb::instance()->isKesiswaan()) {
            ?>
            <br/>
                <button style="float: right">
                    <?php echo CHtml::link('Simpan', array('riwayatPenyakit/create', 'id' => $model->nip)) ?>
                </button>
            <?php
        }
    }
?>