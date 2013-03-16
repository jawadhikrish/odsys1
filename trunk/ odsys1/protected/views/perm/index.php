<?php
/* @var $this PermController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Permisos',
);

$this->menu=array(
	array('label'=>'Registrar permiso', 'url'=>array('create')),
	array('label'=>'Administración', 'url'=>array('admin')),
);
?>

<h1>Permisos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
