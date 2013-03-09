<?php
/* @var $this EqpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Eqps',
);

$this->menu=array(
	array('label'=>'Create Eqp', 'url'=>array('create')),
	array('label'=>'Manage Eqp', 'url'=>array('admin')),
);
?>

<h1>Eqps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
