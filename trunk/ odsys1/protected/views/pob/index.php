<?php
/* @var $this PobController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Población',
);

$this->menu=array(
	array('label'=>'Registrar Población', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Población de la región</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
