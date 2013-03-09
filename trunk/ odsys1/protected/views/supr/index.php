<?php
/* @var $this SuprController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Suprs',
);

$this->menu=array(
	array('label'=>'Create Supr', 'url'=>array('create')),
	array('label'=>'Manage Supr', 'url'=>array('admin')),
);
?>

<h1>Suprs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
