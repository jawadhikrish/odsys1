<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php
        $this->widget('ext.slider.slider', array(
            'container'=>'slideshow',
            'width'=>910, 
            'height'=>340, 
            'timeout'=>6000,
            'infos'=>true,
            'constrainImage'=>true,
            'images'=>array('01.jpg','02.jpg','03.jpg','04.jpg'),
            'alts'=>array('First description','Second description','Third description','Four description'),
            'defaultUrl'=>Yii::app()->request->hostInfo
            )
        );
        ?>


