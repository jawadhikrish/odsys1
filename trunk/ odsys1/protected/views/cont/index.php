<?php
/* @var $this ContController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contratos',
);

$this->menu=array(
	array('label'=>'Registrar horas', 'url'=>array('create')),
	array('label'=>'Buscar registro', 'url'=>array('admin')),
);
?>

<h1>Conts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
