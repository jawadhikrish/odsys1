<?php
/* @var $this InfraController */
/* @var $model Infra */

$this->breadcrumbs=array(
	'Infras'=>array('index'),
	$model->FECHA=>array('view','id'=>$model->FECHA),
	'Update',
);

$this->menu=array(
	array('label'=>'List Infra', 'url'=>array('index')),
	array('label'=>'Create Infra', 'url'=>array('create')),
	array('label'=>'View Infra', 'url'=>array('view', 'id'=>$model->FECHA)),
	array('label'=>'Manage Infra', 'url'=>array('admin')),
);
?>

<h1>Update Infra <?php echo $model->FECHA; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>