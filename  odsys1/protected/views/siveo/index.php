<?php
/* @var $this SiveoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Siveos',
);

$this->menu=array(
	array('label'=>'Create Siveo', 'url'=>array('create')),
	array('label'=>'Manage Siveo', 'url'=>array('admin')),
);
?>

<h1>Siveos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
