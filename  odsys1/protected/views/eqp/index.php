<?php
/* @var $this EqpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Equipameinto',
);

$this->menu=array(
	array('label'=>'Registrar Equipo', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Equipamientos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
