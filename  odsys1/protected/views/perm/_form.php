<?php
/* @var $this PermController */
/* @var $model Perm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'perm-form',
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
		<?php echo $form->labelEx($model,'CODT'); ?>
		<?php echo $form->textField($model,'CODT'); ?>
		<?php echo $form->error($model,'CODT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ESTADO'); ?>
		<?php echo $form->textField($model,'ESTADO',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ESTADO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CODRAYOSX'); ?>
		<?php echo $form->textField($model,'CODRAYOSX'); ?>
		<?php echo $form->error($model,'CODRAYOSX'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ESTADORAYOSX'); ?>
		<?php echo $form->textField($model,'ESTADORAYOSX',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ESTADORAYOSX'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->