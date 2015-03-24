<?php
/* @var $this TablesController */
/* @var $data Tables */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('table_no')); ?>:</b>
	<?php echo CHtml::encode($data->table_no); ?>
	<br />


</div>