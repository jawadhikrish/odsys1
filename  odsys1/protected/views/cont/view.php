<?php
/* @var $this ContController */
/* @var $model Cont */

$this->breadcrumbs=array(
	'Conts'=>array('index'),
	$model->PLA,
);

$this->menu=array(
	array('label'=>'List Cont', 'url'=>array('index')),
	array('label'=>'Create Cont', 'url'=>array('create')),
	array('label'=>'Update Cont', 'url'=>array('update', 'id'=>$model->PLA)),
	array('label'=>'Delete Cont', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PLA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cont', 'url'=>array('admin')),
);
?>

<h1>View Cont #<?php echo $model->PLA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PLA',
		'FEI',
		'HCONTRATADAS',
		'HCONSULTA',
		'HADMINISTRATIVAS',
		'HPROMOCION',
		'HTRASLADO',
		'HCAPACITACION',
		'HACTACADEMICAS',
		'HOTROS',
		'OBSERVACIONES',
	),
)); ?>
