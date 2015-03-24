<?php
/* @var $this EventsController */
/* @var $model Events */

$this->breadcrumbs=array(
	'Events'=>array('index'),
	$model->name,
);
//print_r($_GET);
$id = $_GET['id'];
//print_r($id);
$this->menu=array(
//	array('label'=>'List Events', 'url'=>array('index')),
//	array('label'=>'Create Events', 'url'=>array('create')),
	array('label'=>'Update Events', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete Events', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage Events', 'url'=>array('admin')),
    
    
array('label'=>'Food Menu', 'url'=>array('foodMenu/admin','event_id'=>$id)),
array('label'=>'Guests', 'url'=>array('/guests/admin','event_id'=>$id)),
array('label'=>'Tables', 'url'=>array('/tables/admin','event_id'=>$id)),
array('label'=>'Seating', 'url'=>array('/seating/admin','event_id'=>$id)),
array('label'=>'Uploads', 'url'=>array('/uploads/admin','event_id'=>$id)),
array('label'=>'Guests', 'url'=>array('/guests/admin','event_id'=>$id)),
        
    
    );
?>

<h1>View Events #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'owner',
		'start_time',
		'end_time',
		'name',
		'venue',
		'description',
		'location',
		'user_id',
		'facebook_id',
	),
)); ?>
