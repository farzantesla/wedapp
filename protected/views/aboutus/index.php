<?php
/* @var $this AboutusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Aboutuses',
);

$this->menu=array(
	array('label'=>'Create Aboutus', 'url'=>array('create')),
	array('label'=>'Manage Aboutus', 'url'=>array('admin')),
);
?>

<h1>Aboutuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
