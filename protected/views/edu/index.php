<?php
/* @var $this EduController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Edus',
);

$this->menu=array(
	array('label'=>'Create Edu', 'url'=>array('create')),
	array('label'=>'Manage Edu', 'url'=>array('admin')),
);
?>

<h1>Edus</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
