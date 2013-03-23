<?php
/* @var $this UpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ups',
);

$this->menu=array(
	array('label'=>'Create Up', 'url'=>array('create')),
	array('label'=>'Manage Up', 'url'=>array('admin')),
	array('label'=>'Jefe UP', 'url'=>array('JefeUP/index')),
);
?>

<h1>Ups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
