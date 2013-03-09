<?php
/* @var $this ConsController */
/* @var $model Cons */

$this->breadcrumbs=array(
	'Cons'=>array('index'),
	$model->Registro,
);

$this->menu=array(
	array('label'=>'List Cons', 'url'=>array('index')),
	array('label'=>'Create Cons', 'url'=>array('create')),
	array('label'=>'Update Cons', 'url'=>array('update', 'id'=>$model->Registro)),
	array('label'=>'Delete Cons', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Registro),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cons', 'url'=>array('admin')),
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
