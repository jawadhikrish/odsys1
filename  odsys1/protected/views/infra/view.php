<?php
/* @var $this InfraController */
/* @var $model Infra */

$this->breadcrumbs=array(
	'Infras'=>array('index'),
	$model->FECHA,
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Nuevo registro', 'url'=>array('create')),
	array('label'=>'Actualizar registro', 'url'=>array('update', 'id'=>$model->FECHA)),
	array('label'=>'Eliminar registro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->FECHA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Ver infraestructura de servicio #<?php echo $model->FECHA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'FECHA',
		 array( 'name'=>'COD','type'=>'raw','value'=>CHtml::link(CHtml::encode($model->cOD->DES),
                        array('up/view','id'=>$model->cOD->COD)),),
                 array( 'name'=>'CODT','type'=>'raw','value'=>CHtml::link(CHtml::encode($model->cODT->DES),
		                  array('tipos/view','id'=>$model->cODT->CODT)),),
		'ESTADO',
	),
)); ?>
