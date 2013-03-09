<?php
/* @var $this PermController */
/* @var $model Perm */

$this->breadcrumbs=array(
	'Perms'=>array('index'),
	$model->FECHA=>array('view','id'=>$model->FECHA),
	'Update',
);

$this->menu=array(
	array('label'=>'List Perm', 'url'=>array('index')),
	array('label'=>'Create Perm', 'url'=>array('create')),
	array('label'=>'View Perm', 'url'=>array('view', 'id'=>$model->FECHA)),
	array('label'=>'Manage Perm', 'url'=>array('admin')),
);
?>

<h1>Update Perm <?php echo $model->FECHA; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>