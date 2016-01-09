<?php
require_once 'model/Counter.php';
require_once 'lib/limonade.php';

dispatch('/', 'CounterController::coount');
//dispatch('/:number', 'AssetController::js');

run();
?>
