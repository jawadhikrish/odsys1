<?php
/* @var $this PermController */
/* @var $model Perm */

$this->breadcrumbs=array(
	'Permisos'=>array('index'),
	'Registro',
);

$this->menu=array(
	array('label'=>'Listar Perm', 'url'=>array('index')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Registrar Permiso</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>