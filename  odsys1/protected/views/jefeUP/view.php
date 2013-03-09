<?php
/* @var $this JefeUPController */
/* @var $model Upje */

$this->breadcrumbs=array(
	'Upjes'=>array('index'),
	$model->CED,
	$modelUp->COD,
);

$this->menu=array(
	array('label'=>'Listar Jefe U.P.', 'url'=>array('index')),
	array('label'=>'Crear Jefe U.P.', 'url'=>array('create')),
	array('label'=>'Actualizar Jefe U.P.', 'url'=>array('update', 'id'=>$model->CED)),
	array('label'=>'Eliminar Jefe U.P.', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CED),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Jefe U.P.', 'url'=>array('admin')),
);
?>

<h1>Detalle Jefe UP <?php echo $model->CED; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CED',
		'CODT',
		'POB',
	),
)); ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$modelUp,
	'attributes'=>array(
		'DES',
	),
)); ?>

	

