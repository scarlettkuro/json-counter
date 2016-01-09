<?php

class Counter {
		
	static function count() {
		return Counter::count_with(1);
	}
		
	static function count_with($number) {
		$json = file_get_contents('counter.json');
		$data = json_decode($json, true);
		$data["count"] += $number;
		file_put_contents ( 'counter.json', json_encode($data));
		return $data["count"];
	}
	
	
	static function reset() {
		$json = file_get_contents('counter.json');
		$data = json_decode($json, true);
		$data["count"] = 0;
		file_put_contents ( 'counter.json', json_encode($data));
	}
	
	
}