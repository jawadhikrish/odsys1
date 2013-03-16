<?php
/* @var $this CapiController */
/* @var $model Capi */

$this->breadcrumbs=array(
	'Capacidad'=>array('index'),
	$model->FECHA,
);

$this->menu=array(
	array('label'=>'Listar Registros', 'url'=>array('index')),
	array('label'=>'Registrar capacidad', 'url'=>array('create')),
	array('label'=>'Actualizar capacidad', 'url'=>array('update', 'id'=>$model->FECHA)),
	array('label'=>'Eliminar capacidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->FECHA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Ver capacidad del servicio #<?php echo $model->FECHA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'FECHA',
		array( 'name'=>'COD','type'=>'raw','value'=>CHtml::link(CHtml::encode($model->cOD->DES),
                        array('up/view','id'=>$model->cOD->COD)),),
		'INSTALADA',
		'UTILIZADA',
		'APROVECHAMIENTO',
	),
)); ?>
