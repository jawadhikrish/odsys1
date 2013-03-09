<?php
/* @var $this JefeUPController */
/* @var $data Upje */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cedula')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CED), array('view', 'id'=>$data->CED,'idup'=>$data->COD)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Codigo')); ?>:</b>
	<?php echo CHtml::encode($data->COD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Codigo Tipo')); ?>:</b>
	<?php echo CHtml::encode($data->CODT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Poblacion')); ?>:</b>
	<?php echo CHtml::encode($data->POB); ?>

	<br />


</div>