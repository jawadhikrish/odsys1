<?php
/* @var $this PersController */
/* @var $data Pers */
?>

<div class="view">
    <?php echo CHtml::link(CHtml::encode($data->getAttributeLabel('Ver detalles')),array('view','id'=>$data->CED)); ?>
	<b><?php /* echo CHtml::encode($data->getAttributeLabel('CEDULA'));*/ ?>:</b>
	<?php  /* echo CHtml::link(CHtml::encode($data->CED),array('view','id'=>$data->CED)); */?>
	<b><b>&nbsp;&nbsp; | &nbsp;&nbsp;</b><?php echo CHtml::encode($data->NOM); ?>
    <?php /*echo CHtml::encode($data->getAttributeLabel('TELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->TEL); ?>
	<b><b>&nbsp;&nbsp; | &nbsp;&nbsp;</b><?php echo CHtml::encode($data->getAttributeLabel('EMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->EMA); */?>
</div>