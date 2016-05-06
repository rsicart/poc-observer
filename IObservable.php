<?php

require_once(__DIR__ . '/IObserver.php');

interface IObservable
{
	public function addObserver(IObserver $o);
	public function removeObserver(IObserver $o);
	public function setChange();
	public function notify();
}
