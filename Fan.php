<?php

require_once(__DIR__ . '/IObserver.php');

class Fan implements IObserver
{
	private $name;

	public function __construct($name)
	{
		$this->setName($name);
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function applause()
	{
		print("Me, " .$this->getName() . ", I'm applauding: plas, plas, plas, plas!\n");
	}

	public function hangout()
	{
		print("Me, " .$this->getName() . ", I'm hanging out...\n");
	}

	public function update(IObservable $observable)
	{
		if ($observable->getStatus() == 'Not started' or $observable->getStatus() == 'Pause') {
			$this->hangout();
		} else {
			$this->applause();
		}
	}
}
