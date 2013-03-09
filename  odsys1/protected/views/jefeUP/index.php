<?php
/* @var $this JefeUPController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Upjes',
);

$this->menu=array(
	array('label'=>'Crear Jefe U.P.', 'url'=>array('create')),
	array('label'=>'Administrar Jefe U.P.', 'url'=>array('admin')),
);
?>

<h1>Jefe U.P.</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
