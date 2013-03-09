<?php
/* @var $this ConsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cons',
);

$this->menu=array(
	array('label'=>'Create Cons', 'url'=>array('create')),
	array('label'=>'Manage Cons', 'url'=>array('admin')),
);
?>

<h1>Cons</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
