<?php
/* @var $this SuprController */
/* @var $model Supr */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'supr-form',
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
		<?php echo $form->textField($model,'FECHA'); ?>
		<?php echo $form->error($model,'FECHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COD'); ?>
		<?php echo $form->textField($model,'COD'); ?>
		<?php echo $form->error($model,'COD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HUA'); ?>
		<?php echo $form->textField($model,'HUA',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HUA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HUC'); ?>
		<?php echo $form->textField($model,'HUC',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HUC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HUCE'); ?>
		<?php echo $form->textField($model,'HUCE',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HUCE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HUPS'); ?>
		<?php echo $form->textField($model,'HUPS',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HUPS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HUT'); ?>
		<?php echo $form->textField($model,'HUT',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HUO'); ?>
		<?php echo $form->textField($model,'HUO',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HUO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HUAC'); ?>
		<?php echo $form->textField($model,'HUAC',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HUAC'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->