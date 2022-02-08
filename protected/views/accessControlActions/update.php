<?php
$this->breadcrumbs=array(
	'Access'=>array('accessPermission/accesscontrol'),
	'Update Action Details',
);

$this->menu=array(
	//array('label'=>'List AccessControlActions', 'url'=>array('index')),
	//array('label'=>'Create AccessControlActions', 'url'=>array('create')),
	//array('label'=>'View AccessControlActions', 'url'=>array('view', 'id'=>$model->action_id)),
	//array('label'=>'Manage AccessControlActions', 'url'=>array('admin')),
);
?>
<div class="group" style="height:175px; width:20%; float:left; margin-left:3%; margin-top:2.4%">
        <div id="menu" style="padding-left:2%; padding-top:2%;">
<ul>
<li><?php echo CHtml::link('Create Role',array('/role/admin')); ?></li>
<li><?php echo CHtml::link('Manage User',array('user/admin')); ?></li>
<li><?php echo CHtml::link('Update Controllers',array('/accessControllers/create')); ?></li>
<li><?php echo CHtml::link('Manage Controllers',array('/accessControllers/admin')); ?></li>
<li><?php echo CHtml::link('Update Actions',array('/accessControlActions/admin')); ?></li>
<li><?php echo CHtml::link('Access Permission',array('/accessControllers/assignpermission')); ?></li>
<!--<li><?php //echo CHtml::link('Create User',array('/maUser/create')); ?></li>-->
</ul>
        
        </div>
</div>
 
<!--<h1>Update Actions <?php /*?><?php echo $model->action_id; ?><?php */?></h1>-->

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>