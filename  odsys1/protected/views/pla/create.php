<?php
/* @var $this PlaController */
/* @var $model Pla */

$this->breadcrumbs=array(
	'Plas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pla', 'url'=>array('index')),
	array('label'=>'Manage Pla', 'url'=>array('admin')),
);
?>

<h1>Create Pla</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>