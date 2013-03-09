<?php
/* @var $this PlaController */
/* @var $model Pla */

$this->breadcrumbs=array(
	'Plas'=>array('index'),
	$model->PLA,
);

$this->menu=array(
	array('label'=>'List Pla', 'url'=>array('index')),
	array('label'=>'Create Pla', 'url'=>array('create')),
	array('label'=>'Update Pla', 'url'=>array('update', 'id'=>$model->PLA)),
	array('label'=>'Delete Pla', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PLA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pla', 'url'=>array('admin')),
);
?>

<h1>View Pla #<?php echo $model->PLA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PLA',
		'CED',
		'COD',
		'CODT',
	),
)); ?>
