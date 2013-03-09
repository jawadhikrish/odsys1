<?php
/* @var $this SiveoController */
/* @var $model Siveo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'siveo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'REGISTRO'); ?>
		<?php echo $form->textField($model,'REGISTRO'); ?>
		<?php echo $form->error($model,'REGISTRO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FECHA'); ?>
		<?php echo $form->textField($model,'FECHA',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'FECHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CODT'); ?>
		<?php echo $form->textField($model,'CODT'); ?>
		<?php echo $form->error($model,'CODT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GRUPO'); ?>
		<?php echo $form->textField($model,'GRUPO'); ?>
		<?php echo $form->error($model,'GRUPO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VALOR'); ?>
		<?php echo $form->textField($model,'VALOR',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'VALOR'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->