<?php
/* @var $this InfraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Infras',
);

$this->menu=array(
	array('label'=>'Create Infra', 'url'=>array('create')),
	array('label'=>'Manage Infra', 'url'=>array('admin')),
);
?>

<h1>Infras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
