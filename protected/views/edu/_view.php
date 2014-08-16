<?php
/* @var $this EduController */
/* @var $data Edu */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('edu_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->edu_id), array('view', 'id'=>$data->edu_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desc')); ?>:</b>
	<?php echo CHtml::encode($data->desc); ?>
	<br />


</div>