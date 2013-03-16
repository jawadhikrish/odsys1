<?php
/* @var $this InfraController */
/* @var $model Infra */

$this->breadcrumbs=array(
	'Infraestructura'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista Infrastructura', 'url'=>array('index')),
	array('label'=>'Registrar Infraestructura', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#infra-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administar Infraestructura</h1>

<p>
Opcionalmente puede ingresar un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al principio de cada uno de sus valores de búsqueda para especificar cómo debe hacerse la comparación.
</p>

<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'infra-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'FECHA',        
		array('name'=>'CODT','value'=>'$data->cODT->DES','type'=>'text',),
                array('name'=>'COD','value'=>'$data->cOD->DES','type'=>'text',),
		'ESTADO',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
