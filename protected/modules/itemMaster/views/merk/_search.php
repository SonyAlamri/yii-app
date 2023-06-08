<?php
/* @var $this MerkController */
/* @var $model Merk */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'merk_id'); ?>
		<?php echo $form->textField($model,'merk_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_merk'); ?>
		<?php echo $form->textField($model,'nama_merk',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->