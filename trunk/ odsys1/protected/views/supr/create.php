<?php
/* @var $this SuprController */
/* @var $model Supr */

$this->breadcrumbs=array(
	'Suprs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Supr', 'url'=>array('index')),
	array('label'=>'Manage Supr', 'url'=>array('admin')),
);
?>

<h1>Create Supr</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>