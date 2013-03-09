<?php
/* @var $this UpController */
/* @var $model Up */

$this->breadcrumbs=array(
	'Ups'=>array('index'),
	$model->COD,
);

$this->menu=array(
	array('label'=>'List Up', 'url'=>array('index')),
	array('label'=>'Create Up', 'url'=>array('create')),
	array('label'=>'Update Up', 'url'=>array('update', 'id'=>$model->COD)),
	array('label'=>'Delete Up', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->COD),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Up', 'url'=>array('admin')),
);
?>

<h1>View Up #<?php echo $model->COD; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'COD',
		'DES',
	),
)); ?>
