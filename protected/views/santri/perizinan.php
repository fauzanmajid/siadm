<?php
    $perizinan = PencatatanPerizinan::model()->findAllByAttributes(array('nip_santri' => $model->nip));
    if (empty($perizinan)) {
        /*echo 'No Entry';*/
        echo 'Tidak ada perizinan santri.';
        ?>
        <?php /*if (UserWeb::instance()->isHRD() && UserWeb::instance()->ID != $model->ID ) { ?>
            <br />
            <button><?php echo CHtml::link('Add', array('perizinan/create', 'id' => $model->ID)) ?></button>
            <?php
        }*/
    }
    else {
        foreach ($perizinan as $value) {
            $this->renderPartial('partial/perizinan-item', array(
                'model' => $value,
            ));
        }
        if (UserWeb::instance()->isKesiswaan()) {
            ?>
            <br/>
                <button style="float: right">
                    <?php echo CHtml::link('Tambah', array('pencatatanPerizinan/create', 'id' => $model->nip)) ?>
                </button>
            <?php
        }
    }
?>