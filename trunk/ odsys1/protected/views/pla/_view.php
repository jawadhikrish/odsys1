<?php
/* @var $this PlaController */
/* @var $data Pla */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PLA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PLA), array('view', 'id'=>$data->PLA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CED')); ?>:</b>
	<?php echo CHtml::encode($data->CED); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COD')); ?>:</b>
	<?php echo CHtml::encode($data->COD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODT')); ?>:</b>
	<?php echo CHtml::encode($data->CODT); ?>
	<br />


</div>