<?php
/* @var $this EventsController */
/* @var $model Events */
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
		<?php echo $form->labelEx($model,'owner'); ?>
		<?php echo $form->textField($model,'owner',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'owner'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'start_time'); ?>
		<?php //echo $form->textField($model,'start_time'); ?>
		<?php //echo $form->error($model,'start_time'); ?>
            <?php echo $form->datepickerRow(
        $model,
        'start_time',
        array('options' => 
            array(
                'autoclose' => true,
                'language' => 'en',
                'format'=>'yyyy-mm-dd',
                                ),),
        array(
            //'hint' => 'Click inside! This is a super cool date field.',
            'prepend' => '<i class="icon-calendar"></i>'
        )
                );?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'end_time'); ?>
		<?php //echo $form->textField($model,'end_time'); ?>
		<?php //echo $form->error($model,'end_time'); ?>
            <?php echo $form->datepickerRow(
        $model,
        'end_time',
        array('options' => 
            array(
                'autoclose' => true,
                'language' => 'en',
                'format'=>'yyyy-mm-dd',
                                ),),
        array(
            //'hint' => 'Click inside! This is a super cool date field.',
            'prepend' => '<i class="icon-calendar"></i>'
        )
);?>
            
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'venue'); ?>
		<?php echo $form->textField($model,'venue',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'venue'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->hiddenField($model,'user_id'); ?>
		<?php //echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'facebook_id'); ?>
		<?php echo $form->textField($model,'facebook_id'); ?>
		<?php echo $form->error($model,'facebook_id'); ?>
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