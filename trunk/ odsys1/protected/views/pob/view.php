<?php
/* @var $this PobController */
/* @var $model Pob */

$this->breadcrumbs=array(
	'Pobs'=>array('index'),
	$model->REGISTRO,
);

$this->menu=array(
	array('label'=>'List Pob', 'url'=>array('index')),
	array('label'=>'Create Pob', 'url'=>array('create')),
	array('label'=>'Update Pob', 'url'=>array('update', 'id'=>$model->REGISTRO)),
	array('label'=>'Delete Pob', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->REGISTRO),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pob', 'url'=>array('admin')),
);
?>

<h1>View Pob #<?php echo $model->REGISTRO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'REGISTRO',
		'COD',
		'GRU',
		'HOM',
		'MUJ',
		'AÑO',
	),
)); ?>
