<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
		$user->name = "Manick";
		$user->email = "Manick@joomail.com";
		$user->password = bcrypt('hidden');
		$user->save();
    }
}