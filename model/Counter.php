<?php

class Counter {
	
	static function coount() {
		$json = file_get_contents('counter.json');
		$data = json_decode($json, true);
		$count = $data["count"];
		$data["count"] = $count + 1;
		file_put_contents ( 'counter.json', json_encode($data));
		return $count;
	}
	
}