<?php
/* @var $this PersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Personas',
);

$this->menu=array(
	array('label'=>'Nueva Persona', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
	array('label'=>'Generar PDF', 'url'=>array('pers/index?pdf=1')),
	array('label'=>'Generar Excel', 'url'=>array('pers/index?xls=1')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pers-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Registro de personas</h1>

<?php  $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	
	
));?>
<?php /*
        $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pers-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns' => array(
		array(
			'name' => 'CED',
			'type' => 'raw',
			'value' => 'CHtml::link(CHtml::encode($data->getAttributeLabel("Ver detalles")),array("view","id"=>$data->CED));'
		),
		array(
			'name' => 'NOM',
			'type' => 'raw',
			'value' => 'CHtml::encode($data->NOM)',
		),
	),
));
       */ ?>
