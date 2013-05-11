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

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'PLA'); ?>
		<?php echo $form->textField($model,'PLA',array('size'=>37,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PLA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CED'); ?>
                <?php echo $form->dropDownList($model,'CED', CHtml::listData(Pers::model()->findAll(), 'CED', 'NOM'),array('empty' => ' Seleccione Odontologo')); ?>
		<?php //echo $form->textField($model,'CED',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CED'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COD'); ?>
		<?php echo $form->dropDownList($model,'COD', CHtml::listData(Up::model()->findAll(array('condition'=>'REGION="CHOROTEGA"')), 'COD', 'DES'),array('empty' => ' Seleccione la U.P.')); ?>
		<?php echo $form->error($model,'COD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CODT'); ?>
		<?php echo $form->dropDownList($model,'CODT', CHtml::listData(Tipos::model()->findAll(array('condition'=>'tipo="Perfil Plaza"')), 'CODT', 'DES'),array('empty' => ' Seleccione Perfil.')); ?>
		<?php echo $form->error($model,'CODT'); ?>
	</div>       
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->