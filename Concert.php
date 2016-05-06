<?php

require_once(__DIR__ . '/Observable.php');

class Concert extends Observable
{
	private $group;
	private $status;

	public function __construct($group)
	{
		$this->setGroup($group);
		$this->setStatus('Not started');
	}

	public function getGroup()
	{
		return $this->group;
	}

	public function setGroup($group)
	{
		$this->group = $group;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		print("Concert has status: " . $this->getStatus() . "\n");
		$this->setChange();
	}
}
