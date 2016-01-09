<?php
require_once 'model/Counter.php';
require_once 'lib/limonade.php';

dispatch('/', 'CounterController::count');
dispatch('/reset', 'CounterController::reset');
dispatch('/:number', 'CounterController::count_with');

run();
?>
