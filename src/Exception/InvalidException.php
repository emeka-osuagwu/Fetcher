<?php

namespace Emeka\Fetcher\Exception;

use Exception;

class InvalidException extends Exception {

	public $message;
	
	public function __construct($message)
	{
		$this->message = $message;
	}

	public function getErrorMessage()
	{
		return $this->message;
	}
}