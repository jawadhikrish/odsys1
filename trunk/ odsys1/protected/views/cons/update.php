<?php
/* @var $this ConsController */
/* @var $model Cons */

$this->breadcrumbs=array(
	'Cons'=>array('index'),
	$model->Registro=>array('view','id'=>$model->Registro),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cons', 'url'=>array('index')),
	array('label'=>'Create Cons', 'url'=>array('create')),
	array('label'=>'View Cons', 'url'=>array('view', 'id'=>$model->Registro)),
	array('label'=>'Manage Cons', 'url'=>array('admin')),
);
?>

<h1>Update Cons <?php echo $model->Registro; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>