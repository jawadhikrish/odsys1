<?php
/* @var $this PobController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pobs',
);

$this->menu=array(
	array('label'=>'Create Pob', 'url'=>array('create')),
	array('label'=>'Manage Pob', 'url'=>array('admin')),
);
?>

<h1>Pobs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
