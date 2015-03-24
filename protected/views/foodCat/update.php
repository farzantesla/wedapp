<?php
/* @var $this FoodCatController */
/* @var $model FoodCat */

$this->breadcrumbs=array(
	'Food Cats'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FoodCat', 'url'=>array('index')),
	array('label'=>'Create FoodCat', 'url'=>array('create')),
	array('label'=>'View FoodCat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FoodCat', 'url'=>array('admin')),
);
?>

<h1>Update FoodCat <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>