<?php
/* @var $this PermController */
/* @var $model Perm */

$this->breadcrumbs=array(
	'Perms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Perm', 'url'=>array('index')),
	array('label'=>'Manage Perm', 'url'=>array('admin')),
);
?>

<h1>Create Perm</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>