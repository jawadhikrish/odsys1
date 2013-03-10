<?php
/* @var $this PlaController */
/* @var $model Pla */

$this->breadcrumbs=array(
	'Plaza'=>array('index'),
	$model->PLA,
);

$this->menu=array(
	array('label'=>'Listar Plazas', 'url'=>array('index')),
	array('label'=>'Nueva Plaza', 'url'=>array('create')),
	array('label'=>'Actualizar Plaza', 'url'=>array('update', 'id'=>$model->PLA)),
	array('label'=>'Eliminar Plaza', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PLA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Plaza : <?php echo $model->PLA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PLA',
		'CED',
		'COD',
		'CODT',
	),
)); ?>
