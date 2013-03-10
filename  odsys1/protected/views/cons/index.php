<?php
/* @var $this ConsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Consultas por UP',
);

$this->menu=array(
	array('label'=>'Nuevo registro', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Registro de consultas por UP </h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
