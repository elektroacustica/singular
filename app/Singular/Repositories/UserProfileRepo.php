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
			left join likes
				on users.id = likes.candidato
			where likes.user_id is null
			and users.id <> ?
		', [\Auth::user()->id]);

		return $data;
	}

}