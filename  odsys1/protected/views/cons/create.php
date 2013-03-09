<?php
/* @var $this ConsController */
/* @var $model Cons */

$this->breadcrumbs=array(
	'Cons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cons', 'url'=>array('index')),
	array('label'=>'Manage Cons', 'url'=>array('admin')),
);
?>

<h1>Create Cons</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>