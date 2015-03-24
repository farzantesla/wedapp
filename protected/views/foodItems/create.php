<?php
/* @var $this FoodItemsController */
/* @var $model FoodItems */

$this->breadcrumbs=array(
	'Food Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FoodItems', 'url'=>array('index')),
	array('label'=>'Manage FoodItems', 'url'=>array('admin')),
);
?>

<h1>Create FoodItems</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>