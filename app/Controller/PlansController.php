<?php
class PlansController extends AppController {
	
	public function index() {
		
		$planList = json_decode(file_get_contents(Configure::read('api.planList')));
		
		$this->set('planList', $planList);
	}
}