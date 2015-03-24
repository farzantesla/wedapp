<?php
/* @var $this SeatingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Seatings',
);

$this->menu=array(
	array('label'=>'Create Seating', 'url'=>array('create')),
	array('label'=>'Manage Seating', 'url'=>array('admin')),
);
?>

<h1>Seatings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
