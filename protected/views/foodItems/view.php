<?php
/* @var $this FoodItemsController */
/* @var $model FoodItems */

$this->breadcrumbs=array(
	'Food Items'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List FoodItems', 'url'=>array('index')),
	array('label'=>'Create FoodItems', 'url'=>array('create')),
	array('label'=>'Update FoodItems', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FoodItems', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FoodItems', 'url'=>array('admin')),
);
?>

<h1>View FoodItems #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'name',
		'cat_id',
	),
)); ?>
