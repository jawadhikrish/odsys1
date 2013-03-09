<?php
/* @var $this PobController */
/* @var $model Pob */

$this->breadcrumbs=array(
	'Pobs'=>array('index'),
	$model->REGISTRO=>array('view','id'=>$model->REGISTRO),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pob', 'url'=>array('index')),
	array('label'=>'Create Pob', 'url'=>array('create')),
	array('label'=>'View Pob', 'url'=>array('view', 'id'=>$model->REGISTRO)),
	array('label'=>'Manage Pob', 'url'=>array('admin')),
);
?>

<h1>Update Pob <?php echo $model->REGISTRO; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>