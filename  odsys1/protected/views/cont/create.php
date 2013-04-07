<?php
/* @var $this ContController */
/* @var $model Cont */

$this->breadcrumbs=array(
	'Conts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cont', 'url'=>array('index')),
	array('label'=>'Manage Cont', 'url'=>array('admin')),
);
?>

<h1>Create Cont</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>