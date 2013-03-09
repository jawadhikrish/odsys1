<?php
/* @var $this TiposController */
/* @var $model Tipos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CODT'); ?>
		<?php echo $form->textField($model,'CODT'); ?>
		<?php echo $form->error($model,'CODT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TIPO'); ?>
		<?php echo $form->textField($model,'TIPO',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'TIPO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESC'); ?>
		<?php echo $form->textField($model,'DESC',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'DESC'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->