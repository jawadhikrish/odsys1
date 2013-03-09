<?php
/* @var $this PermController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Perms',
);

$this->menu=array(
	array('label'=>'Create Perm', 'url'=>array('create')),
	array('label'=>'Manage Perm', 'url'=>array('admin')),
);
?>

<h1>Perms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
