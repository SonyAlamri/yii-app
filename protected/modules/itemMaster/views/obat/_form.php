<?php
/* @var $this ObatController */
/* @var $model Obat */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'obat-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'merks_merk_id'); ?>
		<?php echo $form->dropDownList($model,'merks_merk_id',CHtml::ListData(Merk::model()->findAll(),'merk_id','nama_merk')); ?>
		<?php echo $form->error($model,'obat_nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_date'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
		array(
			'attribute'=>'created_date',
			'value'=>$model->created_date,
			'model'=>$model,
			'options'=>array(
				'showAnim'=>'slide',
				'showButtonPanel'=>true,
				'dateFormat'=>'yy-mm-dd',
			),
			'htmlOptions'=>array('style'=>''),
		)); ?>
		<?php echo $form->error($model,'created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'obat_nama'); ?>
		<?php echo $form->textField($model,'obat_nama',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'obat_nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga'); ?>
		<?php echo $form->textField($model,'harga',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'harga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'terjual'); ?>
		<?php echo $form->textField($model,'terjual',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'terjual'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik</title>
</head>
<body style="background-color:#3A5245;">

</body>
</html>