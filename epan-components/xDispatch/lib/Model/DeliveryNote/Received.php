<?php
namespace xDispatch;
class Model_DeliveryNote_Received extends Model_DeliveryNote{
	public $actions=array(
			'can_view'=>array('caption'=>'Whose created Jobcard(received) this post can see'),
			'allow_edit'=>array('caption'=>'Whose created Jobcard this post can edit'),
			'can_assign'=>array('caption'=>'Whose created Jobcard(received) this post can assign'),
			'can_assign_to'=>array('caption'=>' Whose created Jobcard(received) this post can assign to'),
		);
	function init(){
		parent::init();
		$this->addCondition('status','received');
	}
}	