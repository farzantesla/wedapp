<?php
/* @var $this PresentListController */
/* @var $model PresentList */

$this->breadcrumbs=array(
	'Present Lists'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PresentList', 'url'=>array('index')),
	array('label'=>'Create PresentList', 'url'=>array('create')),
	array('label'=>'Update PresentList', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PresentList', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PresentList', 'url'=>array('admin')),
);
?>

<h1>View PresentList #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'present',
		'user_id',
		'out_link',
		'quantity',
		'flag',
	),
)); ?>
