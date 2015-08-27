<?php

namespace Singular\Repositories;

use Singular\Entities\User;

class HomeRepo{
	
	public function take($value)
	{
		return User::take($value)->get();
	}

	public function find($value)
	{
		return User::find($value);
	}
}