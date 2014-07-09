<?php

App::uses('AcmeAPI', 'Lib');

class CellPhonesController extends AppController {
	
	var $acmeAPI;
	
	public function beforeFilter() {
		$this->acmeAPI = new AcmeAPI();
	}
	
	public function index() {
	
	}
	
	public function smartphones() {
		 
		$phoneList = $this->acmeAPI->listSmartPhones();
		
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