<?php
/* @var $this SuprController */
/* @var $model Supr */

$this->breadcrumbs=array(
	'Suprs'=>array('index'),
	$model->REGISTRO,
);

$this->menu=array(
	array('label'=>'List Supr', 'url'=>array('index')),
	array('label'=>'Create Supr', 'url'=>array('create')),
	array('label'=>'Update Supr', 'url'=>array('update', 'id'=>$model->REGISTRO)),
	array('label'=>'Delete Supr', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->REGISTRO),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Supr', 'url'=>array('admin')),
);
?>

<h1>View Supr #<?php echo $model->REGISTRO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'REGISTRO',
		'FECHA',
		'COD',
		'HUA',
		'HUC',
		'HUCE',
		'HUPS',
		'HUT',
		'HUO',
		'HUAC',
	),
)); ?>
