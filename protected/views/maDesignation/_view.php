<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Designation_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Designation_ID), array('view', 'id'=>$data->Designation_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Designation')); ?>:</b>
	<?php echo CHtml::encode($data->Designation); ?>
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