<?php
/* @var $this FoodItemsController */
/* @var $model FoodItems */

$this->breadcrumbs=array(
	'Food Items'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FoodItems', 'url'=>array('index')),
	array('label'=>'Create FoodItems', 'url'=>array('create')),
	array('label'=>'View FoodItems', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FoodItems', 'url'=>array('admin')),
);
?>

<h1>Update FoodItems <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>