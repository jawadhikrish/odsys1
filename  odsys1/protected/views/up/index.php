<?php
/* @var $this UpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Unidad Programatica',
);

$this->menu=array(
	array('label'=>'Nueva U.P', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
	array('label'=>'Jefe UP', 'url'=>array('JefeUP/index')),
);
?>

<h1>Unidad Programatica</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
