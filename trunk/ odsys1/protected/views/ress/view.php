<?php
/* @var $this RessController */
/* @var $model Ress */

$this->breadcrumbs=array(
	'Resses'=>array('index'),
	$model->FECHA,
);

$this->menu=array(
	array('label'=>'List Ress', 'url'=>array('index')),
	array('label'=>'Create Ress', 'url'=>array('create')),
	array('label'=>'Update Ress', 'url'=>array('update', 'id'=>$model->FECHA)),
	array('label'=>'Delete Ress', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->FECHA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ress', 'url'=>array('admin')),
);
?>

<h1>View Ress #<?php echo $model->FECHA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'FECHA',
		'COD',
		'TOTAL',
		'R1',
		'R2',
		'R3',
		'APROV',
	),
)); ?>
