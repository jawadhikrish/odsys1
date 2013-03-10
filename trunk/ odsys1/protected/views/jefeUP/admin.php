<?php
/* @var $this JefeUPController */
/* @var $model Upje */

$this->breadcrumbs=array(
	'Jefes de UP'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Jefe U.P.', 'url'=>array('index')),
	array('label'=>'Crear Jefe U.P.', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#upje-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Jefe U.P.</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'upje-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'CED',
		'COD',
		'CODT',
		'POB',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
