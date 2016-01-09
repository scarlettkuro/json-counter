<?php
class CounterController {
	
	 static function count() {
		$counter = new Counter();
		$count = $counter->count();
		set('count', $count);
		return html('index.html.php');
	}
	
	static function count_with($number) {
		$counter = new Counter();
		$count = $counter->count_with($number);
		set('count', $count);
		return html('index.html.php');
	}
	
	static function reset($number) {
		$counter = new Counter();
		$counter->reset();
	}
}

?>
