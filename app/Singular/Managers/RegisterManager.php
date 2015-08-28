<?php

namespace Singular\Managers;

class RegisterManager extends BaseManager
{
	public function __construct()
	{

	}

	public function getRules()
	{
		$rules = [
			'id' => 'required'
		];

		return $rules;
	}
	
	public function like()
	{

	}
}