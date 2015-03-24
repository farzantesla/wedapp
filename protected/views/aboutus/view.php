<?php
/* @var $this AboutusController */
/* @var $model Aboutus */

$this->breadcrumbs=array(
	'Aboutuses'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Aboutus', 'url'=>array('index')),
	array('label'=>'Create Aboutus', 'url'=>array('create')),
	array('label'=>'Update Aboutus', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Aboutus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Aboutus', 'url'=>array('admin')),
);
?>

<h1>View Aboutus #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'name',
		'detail',
		'wed_date',
		'venue_id',
	),
)); ?>
