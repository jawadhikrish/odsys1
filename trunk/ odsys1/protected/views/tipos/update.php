<?php
/* @var $this TiposController */
/* @var $model Tipos */

$this->breadcrumbs=array(
	'Tiposes'=>array('index'),
	$model->CODT=>array('view','id'=>$model->CODT),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tipos', 'url'=>array('index')),
	array('label'=>'Create Tipos', 'url'=>array('create')),
	array('label'=>'View Tipos', 'url'=>array('view', 'id'=>$model->CODT)),
	array('label'=>'Manage Tipos', 'url'=>array('admin')),
);
?>

<h1>Update Tipos <?php echo $model->CODT; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>