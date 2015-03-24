<?php
/* @var $this PresentListController */
/* @var $model PresentList */

$this->breadcrumbs=array(
	'Present Lists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PresentList', 'url'=>array('index')),
	array('label'=>'Manage PresentList', 'url'=>array('admin')),
);
?>

<h1>Create PresentList</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>