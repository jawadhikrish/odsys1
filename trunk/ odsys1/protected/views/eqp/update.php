<?php
/* @var $this EqpController */
/* @var $model Eqp */

$this->breadcrumbs=array(
	'Eqps'=>array('index'),
	$model->PLACA=>array('view','id'=>$model->PLACA),
	'Update',
);

$this->menu=array(
	array('label'=>'List Eqp', 'url'=>array('index')),
	array('label'=>'Create Eqp', 'url'=>array('create')),
	array('label'=>'View Eqp', 'url'=>array('view', 'id'=>$model->PLACA)),
	array('label'=>'Manage Eqp', 'url'=>array('admin')),
);
?>

<h1>Update Eqp <?php echo $model->PLACA; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>