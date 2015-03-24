<?php
/* @var $this AboutusController */
/* @var $model Aboutus */

$this->breadcrumbs=array(
	'Aboutuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Aboutus', 'url'=>array('index')),
	array('label'=>'Manage Aboutus', 'url'=>array('admin')),
);
?>

<h1>Create Aboutus</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>