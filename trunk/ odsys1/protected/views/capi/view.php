<?php
/* @var $this CapiController */
/* @var $model Capi */

$this->breadcrumbs=array(
	'Capis'=>array('index'),
	$model->FECHA,
);

$this->menu=array(
	array('label'=>'List Capi', 'url'=>array('index')),
	array('label'=>'Create Capi', 'url'=>array('create')),
	array('label'=>'Update Capi', 'url'=>array('update', 'id'=>$model->FECHA)),
	array('label'=>'Delete Capi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->FECHA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Capi', 'url'=>array('admin')),
);
?>

<h1>View Capi #<?php echo $model->FECHA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'FECHA',
		'COD',
		'INSTALADA',
		'UTILIZADA',
		'APROVECHAMIENTO',
	),
)); ?>
