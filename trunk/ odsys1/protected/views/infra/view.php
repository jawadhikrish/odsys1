<?php
/* @var $this InfraController */
/* @var $model Infra */

$this->breadcrumbs=array(
	'Infras'=>array('index'),
	$model->FECHA,
);

$this->menu=array(
	array('label'=>'List Infra', 'url'=>array('index')),
	array('label'=>'Create Infra', 'url'=>array('create')),
	array('label'=>'Update Infra', 'url'=>array('update', 'id'=>$model->FECHA)),
	array('label'=>'Delete Infra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->FECHA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Infra', 'url'=>array('admin')),
);
?>

<h1>View Infra #<?php echo $model->FECHA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'FECHA',
		'CODT',
		'COD',
		'ESTADO',
	),
)); ?>
