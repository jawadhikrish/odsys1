<?php
/* @var $this PersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Personas',
);

$this->menu=array(
	array('label'=>'Nueva Persona', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
	array('label'=>'Generar PDF', 'url'=>array('pers/index?pdf=1')),
	array('label'=>'Generar Excel', 'url'=>array('pers/index?xls=1')),
);
?>

<h1>Registro de personas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	
	
));?>

