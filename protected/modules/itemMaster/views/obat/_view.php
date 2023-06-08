<?php
/* @var $this ObatController */
/* @var $data Obat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('obat_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->obat_id), array('view', 'id'=>$data->obat_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obat_nama')); ?>:</b>
	<?php echo CHtml::encode($data->obat_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga')); ?>:</b>
	<?php echo CHtml::encode($data->harga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terjual')); ?>:</b>
	<?php echo CHtml::encode($data->terjual); ?>
	<br />


</div>
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