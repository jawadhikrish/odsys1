<?php
/* @var $this PlaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Plas',
);

$this->menu=array(
	array('label'=>'Create Pla', 'url'=>array('create')),
	array('label'=>'Manage Pla', 'url'=>array('admin')),
);
?>

<h1>Plas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
