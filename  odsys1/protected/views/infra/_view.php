<?php
/* @var $this InfraController */
/* @var $data Infra */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FECHA), array('view', 'id'=>$data->FECHA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODT')); ?>:</b>
	<?php echo CHtml::encode($data->CODT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COD')); ?>:</b>
	<?php echo CHtml::encode($data->COD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->ESTADO); ?>
	<br />


</div>