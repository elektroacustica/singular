<?php

use Illuminate\Database\Seeder;
use Singular\Entities\User;
use Singular\Entities\Profile;
use Singular\Entities\Configuration;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 50)->create();
        factory(Profile::class, 50)->create();
    }
}
