<?php
/* @var $this PobController */
/* @var $model Pob */

$this->breadcrumbs=array(
	'Pobs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pob', 'url'=>array('index')),
	array('label'=>'Manage Pob', 'url'=>array('admin')),
);
?>

<h1>Create Pob</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>