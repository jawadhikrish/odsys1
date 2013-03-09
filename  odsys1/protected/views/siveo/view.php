<?php
/* @var $this SiveoController */
/* @var $model Siveo */

$this->breadcrumbs=array(
	'Siveos'=>array('index'),
	$model->REGISTRO,
);

$this->menu=array(
	array('label'=>'List Siveo', 'url'=>array('index')),
	array('label'=>'Create Siveo', 'url'=>array('create')),
	array('label'=>'Update Siveo', 'url'=>array('update', 'id'=>$model->REGISTRO)),
	array('label'=>'Delete Siveo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->REGISTRO),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Siveo', 'url'=>array('admin')),
);
?>

<h1>View Siveo #<?php echo $model->REGISTRO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'REGISTRO',
		'FECHA',
		'CODT',
		'GRUPO',
		'VALOR',
	),
)); ?>
