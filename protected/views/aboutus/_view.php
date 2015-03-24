<?php
/* @var $this AboutusController */
/* @var $data Aboutus */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detail')); ?>:</b>
	<?php echo CHtml::encode($data->detail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wed_date')); ?>:</b>
	<?php echo CHtml::encode($data->wed_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('venue_id')); ?>:</b>
	<?php echo CHtml::encode($data->venue_id); ?>
	<br />


</div>