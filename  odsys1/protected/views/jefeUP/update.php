<?php
/* @var $this JefeUPController */
/* @var $model Upje */

$this->breadcrumbs=array(
	'Upjes'=>array('index'),
	$model->CED=>array('view','id'=>$model->CED),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Jefe U.P.', 'url'=>array('index')),
	array('label'=>'Crear Jefe U.P.', 'url'=>array('create')),
	array('label'=>'Actualizar Jefe U.P.', 'url'=>array('view', 'id'=>$model->CED)),
	array('label'=>'Administrar Jefe U.P.', 'url'=>array('admin')),
);
?>

<h1>Actualizar Jefe U.P. <?php echo $model->CED; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>