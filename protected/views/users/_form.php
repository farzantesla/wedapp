<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'facebook_id'); ?>
		<?php echo $form->textField($model,'facebook_id',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'facebook_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hasgtag'); ?>
		<?php echo $form->textField($model,'hasgtag',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'hasgtag'); ?>
	</div>

<!--	<div class="row">
		<?php //echo $form->labelEx($model,'date'); ?>
		<?php echo $form->hiddenfield($model,'date'); ?>
		<?php //echo $form->error($model,'date'); ?>
	</div>-->
        
        <div class="row">
		<?php //echo $form->labelEx($model,'user_level'); ?>
		<?php echo $form->dropDownListRow($model,'user_level',array(1=>'Admin',0=>'Subcriber')); ?>
		<?php //echo $form->error($model,'user_level'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownListRow($model,'status',array(1=>'Active',0=>'De-Active')); ?>
		<?php //echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->