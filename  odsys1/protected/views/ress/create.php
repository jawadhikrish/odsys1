<?php
/* @var $this RessController */
/* @var $model Ress */

$this->breadcrumbs=array(
	'Resses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ress', 'url'=>array('index')),
	array('label'=>'Manage Ress', 'url'=>array('admin')),
);
?>

<h1>Create Ress</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>