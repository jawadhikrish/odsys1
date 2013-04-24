<?php 

$this->menu=array(
		array('label'=>'Generar PDF', 'url'=>array('reports')),
		array('label'=>'Generar Excel', 'url'=>array('excel','idCodt'=>$idCod)),
);
?>

<div class="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'cons-form',
			'enableAjaxValidation'=>FALSE,
)); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'COD'); ?>
		<?php echo $form->dropDownList($model,'COD', CHtml::listData(Up::model()->findAll(array('condition'=>'REGION="CHOROTEGA"')), 'COD', 'DES'),array('empty' => ' Seleccione la U.P.','value'=>0)); ?>
		<?php echo $form->error($model,'COD'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Ver Reporte'); ?>
	</div>

	<div>
		<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'report-grid',
				'dataProvider'=>$model->getReportOne($idCod),
				'columns'=>array(
		//array('name'=>'CODT','value'=>'$data->cODT->DES','type'=>'text',),
		'CODT',
        'C',
		'A',
		'P',
		'TOTAL',
	),
)); ?>
	</div>

	<div>
		<?php 
	 if($excel != 0){
	 $this->widget('application.extensions.EExcelView', array(
     'dataProvider'=>$model->getReportOne($excel),
     'grid_mode'=>'export',
     'title'=>'Reporte1',
     'exportType'=>'Excel2007',
     'autoWidth'=>false,
	 'columns'=>array(
		//array('name'=>'CODT','value'=>'$data->cODT->DES','type'=>'text',),
		'CODT',
		'C',
		'A',
		'P',
		'TOTAL',
	  ),
));}
?>

	</div>

	<?php $this->endWidget(); ?>

</div>
<!-- form -->
