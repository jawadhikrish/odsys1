<?php
/* @var $this RessController */
/* @var $model Ress */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ress-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'FECHA'); ?>
		<?php echo $form->textField($model,'FECHA'); ?>
		<?php echo $form->error($model,'FECHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COD'); ?>
		<?php echo $form->textField($model,'COD'); ?>
		<?php echo $form->error($model,'COD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TOTAL'); ?>
		<?php echo $form->textField($model,'TOTAL'); ?>
		<?php echo $form->error($model,'TOTAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'R1'); ?>
		<?php echo $form->textField($model,'R1'); ?>
		<?php echo $form->error($model,'R1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'R2'); ?>
		<?php echo $form->textField($model,'R2'); ?>
		<?php echo $form->error($model,'R2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'R3'); ?>
		<?php echo $form->textField($model,'R3'); ?>
		<?php echo $form->error($model,'R3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'APROV'); ?>
		<?php echo $form->textField($model,'APROV',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'APROV'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->