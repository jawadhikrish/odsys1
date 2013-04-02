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

        <div class="row">
		<?php echo $form->labelEx($model,'INGRESO'); ?>
		<?php
                /*
                 * Esta funcion llama al componente zii.widgets.jui.CJuiDatePicker
                 * Que depliega un calendario en la interface de usuario
                 */
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'language'=>'es',
                    'model'=>$model,'value'=>$model->INGRESO,
                    'attribute'=>'INGRESO','flat'=>false,
                    'options'=>array('buttonImageOnly'=> true,'constrainInput'=>true,'constrainInput'=>true,
                        'showAnim'=>'slideDown','showButtonPanel'=>'true','mode'=>'focus','dateFormat'=>'yy-mm-dd',
                    ),));
                ?>
		<?php echo $form->error($model,'INGRESO'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'HORAS'); ?>
		<?php echo $form->textField($model,'HORAS'); ?>
		<?php echo $form->error($model,'HORAS'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->