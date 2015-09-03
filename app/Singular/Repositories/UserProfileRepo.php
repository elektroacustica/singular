<?php

namespace Singular\Repositories;

use Singular\Entities\User;

class UserProfileRepo{
	
	public function person($value)
	{

	}

	public function getNotCoincidence()
	{
		$data = \DB::select('
			select users.id as id, avatar, name from users
			left join compatibilities
				on users.id = compatibilities.candidato
			where compatibilities.user_id is null
			and users.id <> ? limit 3
		', [\Auth::user()->id]);

		return $data;
	}

}