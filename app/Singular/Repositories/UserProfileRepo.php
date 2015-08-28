<?php

namespace Singular\Repositories;

use Singular\Entities\User;

class UserProfileRepo{
	
	public function person($value)
	{
		$q = User::take($value);
		return $q->paginate($value);
	}

}