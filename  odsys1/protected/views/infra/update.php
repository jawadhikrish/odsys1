<?php
/* @var $this InfraController */
/* @var $model Infra */

$this->breadcrumbs=array(
	'Infraestructura'=>array('index'),
	$model->FECHA=>array('view','id'=>$model->FECHA),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Registara nuevo', 'url'=>array('create')),
	array('label'=>'Ver registros', 'url'=>array('view', 'id'=>$model->FECHA)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Actualizar registro de infraestructura : <?php echo $model->FECHA; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>