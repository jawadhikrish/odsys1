<?php
/* @var $this PlaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Plaza',
);

$this->menu=array(
	array('label'=>'Nueva Plaza', 'url'=>array('create')),
	array('label'=>'Buscar Plaza', 'url'=>array('admin')),
);
?>

<h1>Plaza</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
