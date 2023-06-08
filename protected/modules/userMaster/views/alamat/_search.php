<?php
/* @var $this AlamatController */
/* @var $model Alamat */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'alamat_id'); ?>
		<?php echo $form->textField($model,'alamat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat_nama'); ?>
		<?php echo $form->textField($model,'alamat_nama',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->