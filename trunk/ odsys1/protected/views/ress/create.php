<?php
/* @var $this RessController */
/* @var $model Ress */

$this->breadcrumbs=array(
	'Referencias'=>array('index'),
	'Registrar referencia',
);

$this->menu=array(
	array('label'=>'Listar Referencia', 'url'=>array('index')),
	array('label'=>'Administar', 'url'=>array('admin')),
);
?>

<h1>Registrar Referencias</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>