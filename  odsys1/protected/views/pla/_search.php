<?php
/* @var $this PlaController */
/* @var $model Pla */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'PLA'); ?>
		<?php echo $form->textField($model,'PLA',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CED'); ?>
		<?php echo $form->textField($model,'CED',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COD'); ?>
		<?php echo $form->textField($model,'COD'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CODT'); ?>
		<?php echo $form->textField($model,'CODT'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->label($model,'INGRESO'); ?>
		<?php echo $form->textField($model,'INGRESO'); ?>
	</div>
    
        <div class="row">
		<?php echo $form->label($model,'HORAS'); ?>
		<?php echo $form->textField($model,'HORAS'); ?>
	</div>
    
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->