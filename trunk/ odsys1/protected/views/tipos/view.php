<?php
/* @var $this TiposController */
/* @var $model Tipos */

$this->breadcrumbs=array(
	'Tipologia de los servicios'=>array('index'),
	$model->CODT,
);

$this->menu=array(
	array('label'=>'Listar Tipos', 'url'=>array('index')),
	array('label'=>'Nuevo Tipo', 'url'=>array('create')),
	array('label'=>'Actualizar Tipo', 'url'=>array('update', 'id'=>$model->CODT)),
	array('label'=>'Eliminar Tipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CODT),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Tipologia de servicio #<?php echo $model->CODT; ?></h1>


<?php

?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CODT',
		'TIPO',
		'DES',
	),
)); ?>
