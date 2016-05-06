<?php

require_once(__DIR__ . '/IObservable.php');

interface IObserver
{
	public function update(IObservable $observable);
}
