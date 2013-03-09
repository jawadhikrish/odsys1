<?php
/* @var $this EqpController */
/* @var $model Eqp */

$this->breadcrumbs=array(
	'Eqps'=>array('index'),
	$model->PLACA,
);

$this->menu=array(
	array('label'=>'List Eqp', 'url'=>array('index')),
	array('label'=>'Create Eqp', 'url'=>array('create')),
	array('label'=>'Update Eqp', 'url'=>array('update', 'id'=>$model->PLACA)),
	array('label'=>'Delete Eqp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PLACA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Eqp', 'url'=>array('admin')),
);
?>

<h1>View Eqp #<?php echo $model->PLACA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PLACA',
		'CODT',
		'COD',
		'FECHAREG',
		'ESTADO',
	),
)); ?>
