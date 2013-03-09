<?php
/* @var $this EqpController */
/* @var $model Eqp */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'eqp-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'PLACA'); ?>
		<?php echo $form->textField($model,'PLACA'); ?>
		<?php echo $form->error($model,'PLACA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CODT'); ?>
		<?php echo $form->textField($model,'CODT'); ?>
		<?php echo $form->error($model,'CODT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COD'); ?>
		<?php echo $form->textField($model,'COD'); ?>
		<?php echo $form->error($model,'COD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FECHAREG'); ?>
		<?php echo $form->textField($model,'FECHAREG'); ?>
		<?php echo $form->error($model,'FECHAREG'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ESTADO'); ?>
		<?php echo $form->textField($model,'ESTADO',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ESTADO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->