<?php

require_once(__DIR__ . '/IObservable.php');

class Observable implements IObservable
{
	private $observers;

	public function __construct()
	{
		$this->observers = [];
	}

	public function addObserver(IObserver $observer)
	{
		$this->observers[] = $observer;
	}

	public function removeObserver(IObserver $observer)
	{
		if (($key = array_search($observer, $this->observers)) !== false) {
			unset($this->observers[$key]);
		}
	}

	public function setChange()
	{
		$this->notify();
	}

	public function notify()
	{
		if (empty($this->observers))
			return false;

		foreach ($this->observers as $observer) {
			$observer->update($this);
		}

		return true;
	}
}
