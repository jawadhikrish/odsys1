<?php
/* @var $this CapiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Capis',
);

$this->menu=array(
	array('label'=>'Create Capi', 'url'=>array('create')),
	array('label'=>'Manage Capi', 'url'=>array('admin')),
);
?>

<h1>Capis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
