<?php
/* @var $this ContController */
/* @var $data Cont */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CON), array('view', 'id'=>$data->CON)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PLA')); ?>:</b>
	<?php echo CHtml::encode($data->PLA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FEI')); ?>:</b>
	<?php echo CHtml::encode($data->FEI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FEF')); ?>:</b>
	<?php echo CHtml::encode($data->FEF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HCONTRATADAS')); ?>:</b>
	<?php echo CHtml::encode($data->HCONTRATADAS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HCONSULTA')); ?>:</b>
	<?php echo CHtml::encode($data->HCONSULTA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HADMINISTRATIVAS')); ?>:</b>
	<?php echo CHtml::encode($data->HADMINISTRATIVAS); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('HPROMOCION')); ?>:</b>
	<?php echo CHtml::encode($data->HPROMOCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HTRASLADO')); ?>:</b>
	<?php echo CHtml::encode($data->HTRASLADO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HCAPACITACION')); ?>:</b>
	<?php echo CHtml::encode($data->HCAPACITACION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HACTACADEMICAS')); ?>:</b>
	<?php echo CHtml::encode($data->HACTACADEMICAS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOTROS')); ?>:</b>
	<?php echo CHtml::encode($data->HOTROS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OBSERVACIONES')); ?>:</b>
	<?php echo CHtml::encode($data->OBSERVACIONES); ?>
	<br />

	*/ ?>

</div>