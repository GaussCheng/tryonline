<?php
/* @var $this WorkController */
/* @var $model Work */

$this->breadcrumbs=array(
	'Works'=>array('index'),
	$model->work_id=>array('view','id'=>$model->work_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Work', 'url'=>array('index')),
	array('label'=>'Create Work', 'url'=>array('create')),
	array('label'=>'View Work', 'url'=>array('view', 'id'=>$model->work_id)),
	array('label'=>'Manage Work', 'url'=>array('admin')),
);
?>

<h1>Update Work <?php echo $model->work_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>