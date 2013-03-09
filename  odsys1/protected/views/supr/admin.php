<?php
/* @var $this SuprController */
/* @var $model Supr */

$this->breadcrumbs=array(
	'Suprs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Supr', 'url'=>array('index')),
	array('label'=>'Create Supr', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#supr-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Suprs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'supr-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'REGISTRO',
		'FECHA',
		'COD',
		'HUA',
		'HUC',
		'HUCE',
		/*
		'HUPS',
		'HUT',
		'HUO',
		'HUAC',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
