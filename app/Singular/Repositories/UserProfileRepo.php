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
			and users.id <> ?
			and genero = "mujer"
			ORDER BY rand() LIMIT 1
		', [\Auth::user()->id]);


		$q = \DB::select('SELECT * FROM users
			WHERE id <> ?
			AND genero = "hombre"
			ORDER BY rand() LIMIT 1', [\Auth::user()->id]);


		return $data;
	}

}