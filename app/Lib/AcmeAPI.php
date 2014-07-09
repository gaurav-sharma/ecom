<?php

class AcmeAPI {
	
	private static $urlList = array (
			'phoneList' => 'http://www.json-generator.com/api/json/get/bZdsbIqceq?indent=2',
			'planList' => 'http://www.json-generator.com/api/json/get/bHhTonFrxe?indent=2' 
	);
	
	public function listSmartPhones() {
		$phoneList = json_decode ( $this->loadURL ( self::$urlList ['phoneList'], true ) );
		return $phoneList;
	}
	
	/*
	 * Seperating the way an API is loaded. 
	 * This way I can switch between file_get_contents, curl or something else
	 * 
	 */
	private function loadURL($url, $cachable = true) {
		
		if ($cachable) {
			return Cache::remember($url, function() use ($url) {
				
				return file_get_contents ( $url );
			});
			
		} else {
			
			return file_get_contents ( $url );
		}
		
	}
}