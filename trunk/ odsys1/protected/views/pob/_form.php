<?php
/* @var $this PobController */
/* @var $model Pob */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pob-form',
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
		<?php echo $form->labelEx($model,'COD'); ?>
		<?php echo $form->textField($model,'COD'); ?>
		<?php echo $form->error($model,'COD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GRU'); ?>
		<?php echo $form->textField($model,'GRU',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'GRU'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HOM'); ?>
		<?php echo $form->textField($model,'HOM'); ?>
		<?php echo $form->error($model,'HOM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MUJ'); ?>
		<?php echo $form->textField($model,'MUJ'); ?>
		<?php echo $form->error($model,'MUJ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AÑO'); ?>
		<?php echo $form->textField($model,'AÑO',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'AÑO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->