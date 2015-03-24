<?php
/* @var $this SeatingController */
/* @var $model Seating */

$this->breadcrumbs=array(
	'Seatings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Seating', 'url'=>array('index')),
	array('label'=>'Create Seating', 'url'=>array('create')),
	array('label'=>'View Seating', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Seating', 'url'=>array('admin')),
);
?>

<h1>Update Seating <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>