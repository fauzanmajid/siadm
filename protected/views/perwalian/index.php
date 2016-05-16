<?php
/* @var $this PerwalianController */
/* @var $dataProvider CActiveDataProvider */

?>
<h1>Wali Santri</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
