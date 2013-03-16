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

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'REGISTRO'); ?>
		<?php echo $form->textField($model,'REGISTRO'); ?>
		<?php echo $form->error($model,'REGISTRO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COD'); ?>
		<?php echo $form->dropDownList($model,'COD', CHtml::listData(Up::model()->findAll(), 'COD', 'COD'),array('empty' => ' Seleccione la U.P.')); ?>
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
		<?php echo $form->labelEx($model,'ANO'); ?>
		<?php echo $form->textField($model,'ANO',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'ANO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->