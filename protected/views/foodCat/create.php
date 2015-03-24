<?php
/* @var $this FoodCatController */
/* @var $model FoodCat */

$this->breadcrumbs=array(
	'Food Cats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FoodCat', 'url'=>array('index')),
	array('label'=>'Manage FoodCat', 'url'=>array('admin')),
);
?>

<h1>Create FoodCat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>