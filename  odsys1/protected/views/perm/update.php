<?php
/* @var $this PermController */
/* @var $model Perm */

$this->breadcrumbs=array(
	'Permisos'=>array('index'),
	$model->FECHA=>array('view','id'=>$model->FECHA),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Permisos', 'url'=>array('index')),
	array('label'=>'Resgistrar Permiso', 'url'=>array('create')),
	array('label'=>'Ver Permisos', 'url'=>array('view', 'id'=>$model->FECHA)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Permiso <?php echo $model->FECHA; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>