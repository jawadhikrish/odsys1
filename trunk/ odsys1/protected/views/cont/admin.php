<?php
/* @var $this ContController */
/* @var $model Cont */

$this->breadcrumbs=array(
	'Contratos'=>array('index'),
	'Buscar Contrato',
);

$this->menu=array(
	array('label'=>'Listar Contratos', 'url'=>array('index')),
	array('label'=>'Registra Contrato', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cont-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar contratos del servicio</h1>

<p>
Si lo desea, puede introducir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>)al comienzo de cada uno de los valores de su búsqueda para especificar cómo la comparación se debe hacer.
</p>

<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cont-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'CON',
		'PLA',
		'FEI',
		'FEF',
		'HCONTRATADAS',
		'HCONSULTA',
		/*
		'HADMINISTRATIVAS',
		'HPROMOCION',
		'HTRASLADO',
		'HCAPACITACION',
		'HACTACADEMICAS',
		'HOTROS',
		'OBSERVACIONES',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
