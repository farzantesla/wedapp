<?php
/* @var $this TablesController */
/* @var $model Tables */

$this->breadcrumbs=array(
	'Tables'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tables', 'url'=>array('index')),
	array('label'=>'Create Tables', 'url'=>array('create')),
	array('label'=>'Update Tables', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tables', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tables', 'url'=>array('admin')),
);
?>

<h1>View Tables #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'table_no',
	),
)); ?>
