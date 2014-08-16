<?php
/* @var $this AgeController */
/* @var $data Age */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('age_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->age_id), array('view', 'id'=>$data->age_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desc')); ?>:</b>
	<?php echo CHtml::encode($data->desc); ?>
	<br />


</div>