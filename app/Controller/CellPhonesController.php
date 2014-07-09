<?php
class CellPhonesController extends AppController {
	
	public function index() {
	
	}
	
	public function smartphones() {
		$phoneList = json_decode(file_get_contents(Configure::read('api.phoneList')));
		
		$this->set('phoneList', $phoneList);
	}
	
	public function basic() {
	
	}
	
	public function bring_your_own_phone() {
	
	}
	
	public function accessories() {
	
	}
	
	public function plans_and_features() {
	
	}
}