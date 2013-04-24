<?php


$this->menu=array(
		array('label'=>'Nuevo registro', 'url'=>array('create')),
		array('label'=>'Buscar Registro', 'url'=>array('admin')),
);
?>

<h1>Reportes</h1>

    <div class="dashIcon span-3">
        <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-chart.png" alt="Page" /></a>
        <div class="dashIconText"><a href="#"><?php echo CHtml::link('Reporte 1',array('report1'))?></a></div>
    </div>