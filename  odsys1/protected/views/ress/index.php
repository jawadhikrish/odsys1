<?php
/* @var $this RessController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Referencias de servicios de salud',
);

$this->menu=array(
	array('label'=>'Registrar Referencia', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Referencias de servicio de salud</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
