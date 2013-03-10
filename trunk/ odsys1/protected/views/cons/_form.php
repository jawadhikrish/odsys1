<?php
/* @var $this ConsController */
/* @var $model Cons */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cons-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Registro'); ?>
		<?php echo $form->textField($model,'Registro'); ?>
		<?php echo $form->error($model,'Registro'); ?>
	</div>

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
		<?php echo $form->labelEx($model,'C1VESALANO'); ?>
		<?php echo $form->textField($model,'C1VESALANO'); ?>
		<?php echo $form->error($model,'C1VESALANO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CSUBSECUENTE'); ?>
		<?php echo $form->textField($model,'CSUBSECUENTE'); ?>
		<?php echo $form->error($model,'CSUBSECUENTE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'APREVENTIVA'); ?>
		<?php echo $form->textField($model,'APREVENTIVA'); ?>
		<?php echo $form->error($model,'APREVENTIVA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ACURATIVA'); ?>
		<?php echo $form->textField($model,'ACURATIVA'); ?>
		<?php echo $form->error($model,'ACURATIVA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PROMHORAS'); ?>
		<?php echo $form->textField($model,'PROMHORAS'); ?>
		<?php echo $form->error($model,'PROMHORAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PROMACTIV'); ?>
		<?php echo $form->textField($model,'PROMACTIV'); ?>
		<?php echo $form->error($model,'PROMACTIV'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->