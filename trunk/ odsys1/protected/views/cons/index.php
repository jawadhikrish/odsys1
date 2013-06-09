<?php
/* @var $this ConsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Consultas por UP',
);

$this->menu=array(
	array('label'=>'Nuevo registro', 'url'=>array('create')),
	array('label'=>'Buscar Registro', 'url'=>array('admin')),
);
?>

<h1>Registro de consultas por UP </h1>

<?php
/*
 $this->widget('zii.widgets.CListView', array(

	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
 * 
 */ ?>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pla-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
                array(
                        'name'=>'FECHA',
			'type' => 'raw',
			'value' => 'CHtml::encode($data->FECHA);'
		),
                 array(
                        'name'=>'COD',
			'type' => 'raw',
			'value' => 'CHtml::link(CHtml::encode($data->cOD->DES),array("up/view","id"=>$data->COD));'
		),
                 array(
                        'name'=>'CODT',
			'type' => 'raw',
			'value' => 'CHtml::link(CHtml::encode($data->cODT->DES),array("tipos/view","id"=>$data->CODT));'
		),
		
	),
)); ?>
<?php 
        $this->widget('chartjs.widgets.ChBars', 
            array(
                'width' => 600,
                'height' => 300,
                'htmlOptions' => array(),
                'labels' => array("January","February","March","April","May","June"),
                'datasets' => array(
                    array(
                        "fillColor" => "#ff00ff",
                        "strokeColor" => "rgba(220,220,220,1)",
                        "data" => array(10, 20, 30, 40, 50, 60)
                    )       
                ),
                'options' => array("value")
            )
        ); 
    ?>