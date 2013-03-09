<?php
/* @var $this JefeUPController */
/* @var $model Upje */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'upje-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CED'); ?>
		<?php echo $form->textField($model,'CED',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CED'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COD'); ?>
		<?php echo $form->textField($model,'COD'); ?>
		<?php echo $form->error($model,'COD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CODT'); ?>
		<?php echo $form->textField($model,'CODT'); ?>
		<?php echo $form->error($model,'CODT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'POB'); ?>
		<?php echo $form->textField($model,'POB'); ?>
		<?php echo $form->error($model,'POB'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->