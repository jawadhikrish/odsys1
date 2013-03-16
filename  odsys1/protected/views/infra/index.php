<?php
/* @var $this InfraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Infraestructura',
);

$this->menu=array(
	array('label'=>'Nuevo registro', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Infraestructura de los servicios odontologicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
