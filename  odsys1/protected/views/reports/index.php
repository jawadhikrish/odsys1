<?php  
  $baseUrl = Yii::app()->theme->baseUrl; 
  $cs = Yii::app()->getClientScript();
  $cs->registerScriptFile('http://www.google.com/jsapi');
  $cs->registerCoreScript('jquery');
  $cs->registerScriptFile($baseUrl.'/js/jquery.gvChart-1.0.1.min.js');
  $cs->registerScriptFile($baseUrl.'/js/pbs.init.js');
  $cs->registerCssFile($baseUrl.'/css/jquery.css');
?>

<?php $this->pageTitle=Yii::app()->name; ?>
<h1><?php echo CHtml::encode(Yii::app()->name); ?> Reportes</h1>

<div class="flash-notice">Click sobre el reporte que desea obtener.</div>
    
    <div class="dashIcon span-3">
        <a href="/odsys/index.php/reports/report1"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/big_icons/icon-chart.png" alt="Page" /></a>
        <div class="dashIconText"><a href="#1"><?php echo CHtml::link('Reporte Consultas',array('report1'))?></a></div>
    </div>
    <div class="dashIcon span-3">
        <a href="/odsys/index.php/pers/index"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/big_icons/icon-contact2.png" alt="Order History" /></a>
        <div class="dashIconText"><a href="/odsys/index.php/pers/index">Personas</a></div>
    </div>
    <div class="dashIcon span-3">
        <a href="/odsys/index.php/pers/index"><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/big_icons/icon-contact2.png" alt="Order History" /></a>
        <div class="dashIconText"><a href="/odsys/index.php/pers/index">Unidades programaticas</a></div>
    </div>
