<?php
/* @var $this ContController */
/* @var $model Cont */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cont-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'PLA'); ?>
		<?php echo $form->textField($model,'PLA',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PLA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FEI'); ?>
		<?php echo $form->textField($model,'FEI'); ?>
		<?php echo $form->error($model,'FEI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FEF'); ?>
		<?php echo $form->textField($model,'FEF'); ?>
		<?php echo $form->error($model,'FEF'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HCONTRATADAS'); ?>
		<?php echo $form->textField($model,'HCONTRATADAS',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HCONTRATADAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HCONSULTA'); ?>
		<?php echo $form->textField($model,'HCONSULTA',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HCONSULTA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HADMINISTRATIVAS'); ?>
		<?php echo $form->textField($model,'HADMINISTRATIVAS',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HADMINISTRATIVAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HPROMOCION'); ?>
		<?php echo $form->textField($model,'HPROMOCION',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HPROMOCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HTRASLADO'); ?>
		<?php echo $form->textField($model,'HTRASLADO',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HTRASLADO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HCAPACITACION'); ?>
		<?php echo $form->textField($model,'HCAPACITACION',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HCAPACITACION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HACTACADEMICAS'); ?>
		<?php echo $form->textField($model,'HACTACADEMICAS',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HACTACADEMICAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HOTROS'); ?>
		<?php echo $form->textField($model,'HOTROS',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HOTROS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OBSERVACIONES'); ?>
		<?php echo $form->textField($model,'OBSERVACIONES',array('size'=>60,'maxlength'=>254)); ?>
		<?php echo $form->error($model,'OBSERVACIONES'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->