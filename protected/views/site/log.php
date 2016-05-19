<?php
/* @var $this SiteController */
/* @var $record Log */
?>

<h1>System Log</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'log-grid',
    'dataProvider' => $model->search(),
    'pager' => array(
        'header' => '',
    ),
    'columns' => array(
        array(
            'header' => 'No',
            'value' => '$this->grid->dataProvider->pagination->offset + $row+1',
            'htmlOptions' => array('style' => 'text-align: center;')
        ),
        array(
            'header' => 'Aktor',
            'value' => 'User::model()->findByPk($data->user_id)->username',
            'htmlOptions' => array('style' => 'text-align: center;')
        ),
        array(
            'name' => 'time',
            'header' => 'Time',
            'htmlOptions' => array('style' => 'text-align: center;')
        ),
        array(
            'name' => 'action',
            'header' => 'Action',
            'htmlOptions' => array('style' => 'text-align: center;')
        ),
    ),
));
?>
