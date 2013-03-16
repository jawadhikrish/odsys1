<?php
/* @var $this PermController */
/* @var $model Perm */

$this->breadcrumbs=array(
	'Permisos'=>array('index'),
	$model->FECHA,
);

$this->menu=array(
	array('label'=>'Listar Permisos', 'url'=>array('index')),
	array('label'=>'Registrar Permiso', 'url'=>array('create')),
	array('label'=>'Actualizar Permisos', 'url'=>array('update', 'id'=>$model->FECHA)),
	array('label'=>'Eliminar Permisos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->FECHA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>VVer permiso #<?php echo $model->FECHA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'FECHA',
		'COD',
            array( 'name'=>'COD','type'=>'raw','value'=>CHtml::link(CHtml::encode($model->cOD->DES),
                        array('up/view','id'=>$model->cOD->COD)),),
            array( 'name'=>'CODT','type'=>'raw','value'=>CHtml::link(CHtml::encode($model->cODT->DES),
		                  array('tipos/view','id'=>$model->cODT->CODT)),),
		'CODT',
		'ESTADO',
		'CODRAYOSX',
		'ESTADORAYOSX',
	),
)); ?>
