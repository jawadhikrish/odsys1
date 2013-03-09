<?php
/* @var $this RessController */
/* @var $data Ress */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FECHA), array('view', 'id'=>$data->FECHA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COD')); ?>:</b>
	<?php echo CHtml::encode($data->COD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TOTAL')); ?>:</b>
	<?php echo CHtml::encode($data->TOTAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('R1')); ?>:</b>
	<?php echo CHtml::encode($data->R1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('R2')); ?>:</b>
	<?php echo CHtml::encode($data->R2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('R3')); ?>:</b>
	<?php echo CHtml::encode($data->R3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('APROV')); ?>:</b>
	<?php echo CHtml::encode($data->APROV); ?>
	<br />


</div>