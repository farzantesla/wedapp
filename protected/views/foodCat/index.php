<?php
/* @var $this FoodCatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Food Cats',
);

$this->menu=array(
	array('label'=>'Create FoodCat', 'url'=>array('create')),
	array('label'=>'Manage FoodCat', 'url'=>array('admin')),
);
?>

<h1>Food Cats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
