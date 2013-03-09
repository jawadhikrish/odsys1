<?php
/* @var $this PlaController */
/* @var $model Pla */

$this->breadcrumbs=array(
	'Plas'=>array('index'),
	$model->PLA=>array('view','id'=>$model->PLA),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pla', 'url'=>array('index')),
	array('label'=>'Create Pla', 'url'=>array('create')),
	array('label'=>'View Pla', 'url'=>array('view', 'id'=>$model->PLA)),
	array('label'=>'Manage Pla', 'url'=>array('admin')),
);
?>

<h1>Update Pla <?php echo $model->PLA; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>