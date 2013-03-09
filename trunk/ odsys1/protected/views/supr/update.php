<?php
/* @var $this SuprController */
/* @var $model Supr */

$this->breadcrumbs=array(
	'Suprs'=>array('index'),
	$model->REGISTRO=>array('view','id'=>$model->REGISTRO),
	'Update',
);

$this->menu=array(
	array('label'=>'List Supr', 'url'=>array('index')),
	array('label'=>'Create Supr', 'url'=>array('create')),
	array('label'=>'View Supr', 'url'=>array('view', 'id'=>$model->REGISTRO)),
	array('label'=>'Manage Supr', 'url'=>array('admin')),
);
?>

<h1>Update Supr <?php echo $model->REGISTRO; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>