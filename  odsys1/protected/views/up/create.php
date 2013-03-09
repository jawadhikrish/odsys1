<?php
/* @var $this UpController */
/* @var $model Up */

$this->breadcrumbs=array(
	'Ups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Up', 'url'=>array('index')),
	array('label'=>'Manage Up', 'url'=>array('admin')),
);
?>

<h1>Create Up</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>