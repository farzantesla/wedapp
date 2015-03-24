<?php
/* @var $this FoodItemsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Food Items',
);

$this->menu=array(
	array('label'=>'Create FoodItems', 'url'=>array('create')),
	array('label'=>'Manage FoodItems', 'url'=>array('admin')),
);
?>

<h1>Food Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
