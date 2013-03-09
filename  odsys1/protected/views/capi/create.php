<?php
/* @var $this CapiController */
/* @var $model Capi */

$this->breadcrumbs=array(
	'Capis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Capi', 'url'=>array('index')),
	array('label'=>'Manage Capi', 'url'=>array('admin')),
);
?>

<h1>Create Capi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>