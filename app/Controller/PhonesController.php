<?php
class PhonesController extends AppController {


	public function index() {
		
		$phoneList = json_decode(file_get_contents(Configure::read('api.phoneList'))); 
		
		$this->set('phoneList', $phoneList);
	}

}