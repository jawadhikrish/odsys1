<?php
/* @var $this PermController */
/* @var $model Perm */

$this->breadcrumbs=array(
	'Perms'=>array('index'),
	$model->FECHA,
);

$this->menu=array(
	array('label'=>'List Perm', 'url'=>array('index')),
	array('label'=>'Create Perm', 'url'=>array('create')),
	array('label'=>'Update Perm', 'url'=>array('update', 'id'=>$model->FECHA)),
	array('label'=>'Delete Perm', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->FECHA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Perm', 'url'=>array('admin')),
);
?>

<h1>View Perm #<?php echo $model->FECHA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'FECHA',
		'COD',
		'CODT',
		'ESTADO',
		'CODRAYOSX',
		'ESTADORAYOSX',
	),
)); ?>
