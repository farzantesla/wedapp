<?php
/* @var $this AboutusController */
/* @var $model Aboutus */

$this->breadcrumbs=array(
	'Aboutuses'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Aboutus', 'url'=>array('index')),
	array('label'=>'Create Aboutus', 'url'=>array('create')),
	array('label'=>'View Aboutus', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Aboutus', 'url'=>array('admin')),
);
?>

<h1>Update Aboutus <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>