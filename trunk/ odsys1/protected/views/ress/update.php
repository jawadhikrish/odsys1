<?php
/* @var $this RessController */
/* @var $model Ress */

$this->breadcrumbs=array(
	'Resses'=>array('index'),
	$model->FECHA=>array('view','id'=>$model->FECHA),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ress', 'url'=>array('index')),
	array('label'=>'Create Ress', 'url'=>array('create')),
	array('label'=>'View Ress', 'url'=>array('view', 'id'=>$model->FECHA)),
	array('label'=>'Manage Ress', 'url'=>array('admin')),
);
?>

<h1>Update Ress <?php echo $model->FECHA; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>