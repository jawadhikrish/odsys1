<?php
/* @var $this ConsController */
/* @var $model Cons */

$this->breadcrumbs=array(
	'Consultas por UP'=>array('index'),
	$model->Registro,
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Nuevo registro', 'url'=>array('create')),
	array('label'=>'Actualizar registro', 'url'=>array('update', 'id'=>$model->Registro)),
	array('label'=>'Eliminar Registro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Registro),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>View Cons #<?php echo $model->Registro; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Registro',
		'FECHA',
		'COD',
		'CODT',
		'C1VESALANO',
		'CSUBSECUENTE',
		'APREVENTIVA',
		'ACURATIVA',
		'PROMHORAS',
		'PROMACTIV',
	),
)); ?>
