<?php
/* @var $this PlaController */
/* @var $data Pla */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PLA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PLA), array('view', 'id'=>$data->PLA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CED')); ?>:</b>
	<?php echo CHtml::encode($data->cED->NOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COD')); ?>:</b>
	<?php echo CHtml::encode($data->cOD->DES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODT')); ?>:</b>
	<?php echo CHtml::encode($data->cODT->DES); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('INGRESO')); ?>:</b>
	<?php echo CHtml::encode($data->INGRESO); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('HORAS')); ?>:</b>
	<?php echo CHtml::encode($data->HORAS); ?>
	<br />


</div>