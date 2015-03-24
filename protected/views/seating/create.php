<?php
/* @var $this SeatingController */
/* @var $model Seating */

$this->breadcrumbs=array(
	'Seatings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Seating', 'url'=>array('index')),
	array('label'=>'Manage Seating', 'url'=>array('admin')),
);
?>

<h1>Create Seating</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>