<?php

namespace xStore;

class Model_MaterialRequest_Received extends Model_MaterialRequest{
	
	function init(){
		parent::init();
		$this->addCondition('status','received');
	}
}	