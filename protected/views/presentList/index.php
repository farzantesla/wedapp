<?php
/* @var $this PresentListController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Present Lists',
);

$this->menu=array(
	array('label'=>'Create PresentList', 'url'=>array('create')),
	array('label'=>'Manage PresentList', 'url'=>array('admin')),
);
?>

<h1>Present Lists</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
