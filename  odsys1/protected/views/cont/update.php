<?php
/* @var $this ContController */
/* @var $model Cont */

$this->breadcrumbs=array(
	'Conts'=>array('index'),
	$model->CON=>array('view','id'=>$model->CON),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cont', 'url'=>array('index')),
	array('label'=>'Create Cont', 'url'=>array('create')),
	array('label'=>'View Cont', 'url'=>array('view', 'id'=>$model->CON)),
	array('label'=>'Manage Cont', 'url'=>array('admin')),
);
?>

<h1>Update Cont <?php echo $model->CON; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>