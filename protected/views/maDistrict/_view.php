<?php
/* @var $this MaDistrictController */
/* @var $data MaDistrict */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('District_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->District_ID), array('view', 'id'=>$data->District_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('District_Name')); ?>:</b>
	<?php echo CHtml::encode($data->District_Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Provincial_Councils_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Provincial_Councils_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add_by')); ?>:</b>
	<?php echo CHtml::encode($data->add_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add_date')); ?>:</b>
	<?php echo CHtml::encode($data->add_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edit_by')); ?>:</b>
	<?php echo CHtml::encode($data->edit_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edit_date')); ?>:</b>
	<?php echo CHtml::encode($data->edit_date); ?>
	<br />


</div>