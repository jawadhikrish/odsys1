<?php
/* @var $this UpController */
/* @var $model Up */

$this->breadcrumbs=array(
	'Ups'=>array('index'),
	$model->COD=>array('view','id'=>$model->COD),
	'Update',
);

$this->menu=array(
	array('label'=>'List Up', 'url'=>array('index')),
	array('label'=>'Create Up', 'url'=>array('create')),
	array('label'=>'View Up', 'url'=>array('view', 'id'=>$model->COD)),
	array('label'=>'Manage Up', 'url'=>array('admin')),
);
?>

<h1>Update Up <?php echo $model->COD; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>