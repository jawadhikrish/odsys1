
<?php
/* @var $this ConsController */
/* @var $model Cons */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cons-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php // echo $form->labelEx($model,'Registro',array('TYPE'=>"hidden")); ?>
		<?php $lIDS =  ConsController::getLastId();
                echo $form->textField($model,'Registro',array('readonly'=>'readonly', 'TYPE'=>"hidden",'value'=>$lIDS+1));  ?>
		<?php echo $form->error($model,'Registro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FECHA'); ?>
                <?php
                /*
                 * Esta funcion llama al componente zii.widgets.jui.CJuiDatePicker
                 * Que depliega un calendario en la interface de usuario
                 */
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'language'=>'es',
                    'model'=>$model,'value'=>$model->FECHA,
                    'attribute'=>'FECHA','flat'=>false,  
                    'options'=>array('buttonImageOnly'=> true,'constrainInput'=>true,'constrainInput'=>true,
                        'showAnim'=>'slideDown','showButtonPanel'=>'true','mode'=>'focus','dateFormat'=>'yy-mm-dd',
                    ),));
                ?>
		<?php // echo $form->textField($model,'FECHA');?>
		<?php echo $form->error($model,'FECHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COD'); ?>
                <?php echo $form->dropDownList($model,'COD', CHtml::listData(Up::model()->findAll(array('condition'=>'REGION="CHOROTEGA"')), 'COD', 'DES'),array('empty' => ' Seleccione la U.P.')); ?>
		<?php echo $form->error($model,'COD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CODT'); ?>
                <?php echo $form->dropDownList($model,"CODT", CHtml::listData(Tipos::model()->findAll(array('condition'=>'tipo="programa"')), 'CODT', 'DES'), array('empty'=>' Seleccione programa de atención')); ?>
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