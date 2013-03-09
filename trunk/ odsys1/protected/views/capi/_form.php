<?php
/* @var $this CapiController */
/* @var $model Capi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'capi-form',
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
		<?php echo $form->labelEx($model,'INSTALADA'); ?>
		<?php echo $form->textField($model,'INSTALADA'); ?>
		<?php echo $form->error($model,'INSTALADA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UTILIZADA'); ?>
		<?php echo $form->textField($model,'UTILIZADA'); ?>
		<?php echo $form->error($model,'UTILIZADA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'APROVECHAMIENTO'); ?>
		<?php echo $form->textField($model,'APROVECHAMIENTO'); ?>
		<?php echo $form->error($model,'APROVECHAMIENTO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->