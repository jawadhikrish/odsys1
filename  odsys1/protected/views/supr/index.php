<?php
/* @var $this SuprController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Supervisión',
);

$this->menu=array(
	array('label'=>'Nueva Supervisión', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Suprs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
