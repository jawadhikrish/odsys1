<?php
/* @var $this RessController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Resses',
);

$this->menu=array(
	array('label'=>'Create Ress', 'url'=>array('create')),
	array('label'=>'Manage Ress', 'url'=>array('admin')),
);
?>

<h1>Resses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
