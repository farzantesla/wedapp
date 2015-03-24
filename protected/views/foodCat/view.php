<?php
/* @var $this FoodCatController */
/* @var $model FoodCat */

$this->breadcrumbs=array(
	'Food Cats'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FoodCat', 'url'=>array('index')),
	array('label'=>'Create FoodCat', 'url'=>array('create')),
	array('label'=>'Update FoodCat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FoodCat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FoodCat', 'url'=>array('admin')),
);
?>

<h1>View FoodCat #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'type',
	),
)); ?>
