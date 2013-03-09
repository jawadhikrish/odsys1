<?php
/* @var $this PlaController */
/* @var $model Pla */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pla-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'PLA'); ?>
		<?php echo $form->textField($model,'PLA',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'PLA'); ?>
	</div>

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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->