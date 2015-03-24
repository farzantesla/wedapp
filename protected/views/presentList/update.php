<?php
/* @var $this PresentListController */
/* @var $model PresentList */

$this->breadcrumbs=array(
	'Present Lists'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PresentList', 'url'=>array('index')),
	array('label'=>'Create PresentList', 'url'=>array('create')),
	array('label'=>'View PresentList', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PresentList', 'url'=>array('admin')),
);
?>

<h1>Update PresentList <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>