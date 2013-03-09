<?php
/* @var $this JefeUPController */
/* @var $model Upje */

$this->breadcrumbs=array(
	'Upjes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Jefe U.P.', 'url'=>array('index')),
	array('label'=>'Administrar Jefe U.P.', 'url'=>array('admin')),
);
?>

<h1>Crear Jefe U.P.</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>