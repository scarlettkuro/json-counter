<?php
class CounterController {
	 static function coount() {
		$counter = new Counter();
		$count = $counter->coount();
		set('count', $count);
		return html('index.html.php');
	}

}

?>
