<?php
/* @var $this CapiController */
/* @var $model Capi */

$this->breadcrumbs=array(
	'Capis'=>array('index'),
	$model->FECHA=>array('view','id'=>$model->FECHA),
	'Update',
);

$this->menu=array(
	array('label'=>'List Capi', 'url'=>array('index')),
	array('label'=>'Create Capi', 'url'=>array('create')),
	array('label'=>'View Capi', 'url'=>array('view', 'id'=>$model->FECHA)),
	array('label'=>'Manage Capi', 'url'=>array('admin')),
);
?>

<h1>Update Capi <?php echo $model->FECHA; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>