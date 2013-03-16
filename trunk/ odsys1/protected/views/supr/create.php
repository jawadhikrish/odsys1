<?php
/* @var $this SuprController */
/* @var $model Supr */

$this->breadcrumbs=array(
	'Supervisión'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Supervisiones', 'url'=>array('index')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Registrar supervisión</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>