<?php

namespace Singular\Repositories;

use Singular\Entities\User;
use Singular\Entities\Profile;

class UserProfileRepo{
	
	public function getModel()
	{
		return new Profile;
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

	public function putProfile()
	{
		$profile = Profile::find(\Auth::user()->id);
		return $profile;
	}

	public function findProfile()
	{
		$profile = \DB::select
		(
			'select * from users
			join profiles
				on users.id = profiles.user_id
			where users.id = ?',
			[\Auth::user()->id]
		);
		return $profile;
	}

}