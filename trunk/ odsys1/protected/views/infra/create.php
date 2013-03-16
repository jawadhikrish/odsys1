<?php
/* @var $this InfraController */
/* @var $model Infra */

$this->breadcrumbs=array(
	'Infraestructura'=>array('index'),
	'Registrar Nuevo',
);

$this->menu=array(
	array('label'=>'Listar registros', 'url'=>array('index')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Registrar Infraestructura</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>