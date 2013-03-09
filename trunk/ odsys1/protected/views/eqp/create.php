<?php
/* @var $this EqpController */
/* @var $model Eqp */

$this->breadcrumbs=array(
	'Eqps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Eqp', 'url'=>array('index')),
	array('label'=>'Manage Eqp', 'url'=>array('admin')),
);
?>

<h1>Create Eqp</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>