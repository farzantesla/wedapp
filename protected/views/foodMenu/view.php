<?php
/* @var $this FoodMenuController */
/* @var $model FoodMenu */

$this->breadcrumbs=array(
	'Food Menus'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FoodMenu', 'url'=>array('index')),
	array('label'=>'Create FoodMenu', 'url'=>array('create')),
	array('label'=>'Update FoodMenu', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FoodMenu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FoodMenu', 'url'=>array('admin')),
);
?>

<h1>View FoodMenu #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'item_id',
		'user_id',
	),
)); ?>
