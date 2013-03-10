<?php
/* @var $this PlaController */
/* @var $model Pla */

$this->breadcrumbs=array(
	'Plaza'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar plazas', 'url'=>array('index')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Nueva plaza laboral</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>