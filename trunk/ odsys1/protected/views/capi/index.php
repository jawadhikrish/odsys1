<?php
/* @var $this CapiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Capacidad Instalada',
);

$this->menu=array(
	array('label'=>'Registrar Capacidad', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Capacidad instalada de los servicios de odontologia</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
