<?php
    $prestasi = Prestasi::model()->findAllByAttributes(array('nip_santri' => $model->nip));
    if (empty($prestasi)) {
        echo 'No Entry';
        ?>
        <?php /*if (UserWeb::instance()->isHRD() && UserWeb::instance()->ID != $model->ID ) { ?>
            <br />
            <button><?php echo CHtml::link('Add', array('prestasi/create', 'id' => $model->ID)) ?></button>
            <?php
        }*/
    }
    else {
        foreach ($prestasi as $value) {
            $this->renderPartial('partial/prestasi-item', array(
                'model' => $value,
            ));
        }
        if (UserWeb::instance()->isKesiswaan()) {
            ?>
            <br/>
                <button style="float: right">
                    <?php echo CHtml::link('Tambah', array('prestasi/create', 'id' => $model->nip)) ?>
                </button>
            <?php
        }
    }
?>